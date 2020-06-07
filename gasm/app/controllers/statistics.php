<?php
class Statistics extends Controller
{
    private $post;
    private $database;
    private $db;
    public function __construct()
    {
        $this->database = new Database();
        $this->db= $this->database -> connect();
        $this->post = $this->model('Post',$this->db);
    }
    
   public function index()
   {
    $this->view('statistics');
   }
   public function redirectPage(){
    $this->view('show_statistics');
   }
   public function exportCSV(){
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        
    
       $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(isset($_POST['time']) && isset($_POST['space']) && isset($_POST['format'])){
        $data = [
            'time' =>trim($_POST['time']),
            'space' => trim($_POST['space']),
            'format' => trim($_POST['format'])
        ];
        
        if(strcasecmp($data['format'],"csv") == 0){
            $filename = "report_csv.csv";
            header('Content-type: application/csv');
            header('Content-Disposition: attachment; filename='.$filename);
            $fp = fopen('php://output', 'w');
            $result = $this->post->read($data['time'],$data['space']);
            $num = $result->rowCount();
            if($num > 0){
            //Post array
            if(strcasecmp($data['space'],'neighborhood')==0){
                $header = [
                    'id' => 'Report id',
                    'city' => 'City',
                    'cartier' => 'District',
                    'quantity' => 'Quantity'
                ];
                fputcsv($fp,$header);
                $id = 1;
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $post_item = array(
                        'Report_id' => $id,
                        'City' => $city,
                        'District' => $cartier,
                        'Quantity' => $quantity
                    );
                    $id ++;
                    fputcsv($fp, $post_item);
        
                }
            }else{
                $header = [
                    'id' => 'Report id',
                    'city' => 'City',
                    'quantity' => 'Trash quantity'
                ];
                fputcsv($fp,$header);
                $id = 1;
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    $post_item = array(
                        'Report_id' => $id,
                        'City' => $city,
                        'Quantity' => $quantity
                    );
                    $id ++;
                    fputcsv($fp, $post_item);
                }
            }
            } else {
            //no posts
            json_encode(
                array('message'=>'No Posts Found')
            );
            }
            }
        }else{
        echo 'There is a problem!';
    }
    } 
}
}