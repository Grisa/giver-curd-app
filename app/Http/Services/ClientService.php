<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

use App\Models\Client;

class ClientService
{

    private $clientModel;

    function __construct()
    {
        $this->clientModel = new Client();
    }

    public function getList()
    {
        return DB::collection('clients')->paginate(25);
    }

    public function getNameCount()
    {
        $validLastName = $this->clientModel::where('last_name', '<>', '')->get()->count();
        $emptyLastName = $this->clientModel::where('last_name', '=', '')->get()->count();

        return [$validLastName, $emptyLastName];
    }

    public function getGenderCount()
    {
        $validGender = $this->clientModel::where('gender', '<>', '')->get()->count();
        $emptyGender = $this->clientModel::where('gender', '=', '')->get()->count();

        return [$validGender, $emptyGender];
    }

    public function getMailCount()
    {
        $validMail = $this->clientModel::where('email', '<>', '')->get()->count();
        $emptyMail = $this->clientModel::where('email', '=', '')->get()->count();

        return [$validMail, $emptyMail];
    }

    public function deleteClient($id)
    {
        $client = $this->clientModel::find($id);
        $client->delete();
    }

    public function importFile($file)
    {
        if (!$file->isValid()) {
            return ['success' => false, 'msg' => 'Arquivo invalido', 'list' => []];
        }

        $csvArray = $this->parse_csv_file($file);
        $hasError = false;
        $insertData = [];
        $errorList = [];

        foreach ($csvArray as $row) {
            $return = $this->validateClientRowInsert($row);
            if (!$return['erros']) {
                $client = $this->fillClientObject($row);
                $client->save();
            } else {
                $hasError = true;
                array_push($errorList, $return['errorList']);
            }
        }

        $this->clientModel->save($insertData);

        if ($hasError) {
            return ['success' => false, 'msg' => 'Importado com inconsistencias', 'list' => $errorList];
        }

        return ['success' => true, 'msg' => 'Arquivos importados com sucesso', 'list' => []];
    }

    public function fillClientObject($data)
    {
        $client = new Client();
        #Esse id nao vai ser utilizado como PK, afinal, isso aqui eh um nosql
        $client->id = $data['id'];
        $client->first_name = $data['first_name'];
        $client->last_name = $data['last_name'] ?? '';
        $client->email = $data['email'];
        $client->gender = $data['gender'] ?? '';
        $client->company = $data['company'];
        $client->city = $data['city'] ?? '';
        $client->title = $data['title'] ?? '';
        $client->website = $data['website'] ?? '';

        return $client;
    }

    public function validateClientRowInsert($row)
    {
        $hasErrors = false;
        $errors = [];

        if (empty($row['id'])) {
            #tem que ter esse carinha
            $hasErrors = true;
            array_push($errors, "Todas linhas precisam possuir um valor de ID");
        }

        if (empty($row['first_name'])) {
            #primeiro nome obrigatorio
            $hasErrors = true;
            array_push($errors, "Linha com Id " . $row['id'] . " com primeiro nome invalido");
        }

        if (empty($row['email']) || !filter_var($row['email'], FILTER_VALIDATE_EMAIL)) {
            #email invalido
            $hasErrors = true;
            array_push($errors, "Id " . $row['id'] . " com email invalido");
        }

        if (!empty($row['website']) && !filter_var($row['website'], FILTER_VALIDATE_URL)) {
            #email invalido
            $hasErrors = true;
            array_push($errors, "Id " . $row['id'] . " com email invalido");
        }

        return ['erros' => $hasErrors, 'errorList' => $errors];
    }

    function parse_csv_file($csvfile)
    {
        $csv = array();
        $rowcount = 0;
        if (($handle = fopen($csvfile, "r")) !== FALSE) {
            $max_line_length = 10000;
            $header = fgetcsv($handle, $max_line_length);
            $header_colcount = count($header);
            while (($row = fgetcsv($handle, $max_line_length)) !== FALSE) {
                $row_colcount = count($row);
                if ($row_colcount == $header_colcount) {
                    $entry = array_combine($header, $row);
                    $csv[] = $entry;
                } else {
                    error_log("csvreader: Invalid number of columns at line " . ($rowcount + 2) . " (row " . ($rowcount + 1) . "). Expected=$header_colcount Got=$row_colcount");
                    return null;
                }
                $rowcount++;
            }
            //echo "Totally $rowcount rows found\n";
            fclose($handle);
        } else {
            error_log("csvreader: Could not read CSV \"$csvfile\"");
            return null;
        }
        return $csv;
    }
}
