<?php

class Physician {

  private $physicianNames = [
    0 => ['id' => 10, 'title' => 'Dr.', 'first_name' => 'Julius', 'last_name' => 'Hibbert', 'email' => 'jh@hospital.com'],
    1 => ['id' => 11, 'title' => 'Dr.', 'first_name' => 'Algernop', 'last_name' => 'Krieger', 'email' => 'ka@hospital.com'],
    2 => ['id' => 12, 'title' => 'Dr.', 'first_name' => 'Nick', 'last_name' => 'Riviera', 'email' => 'na@hospital.com']
  ];

  public function getNameList(){
    $str = '';
    foreach($this->physicianNames as $row){
        $str .= '<li><a href="index.php?request=clients&id='.$row['id'].'" class="text-dark">'.$row['last_name'].', '.$row['first_name'].'</a></li>';
    }
    return $str;
  }

  public function physicianHeader($id){
    $str = '';
    foreach($this->physicianNames as $row){
      if($row['id'] == $id)
        $str .= '
        <h1>'.$row['title'].' '.$row['first_name'].' '.$row['last_name'].'</h1>
        <p>'.$row['email'].'</p>
        ';
    }
    print $str;
  }

}

?>
