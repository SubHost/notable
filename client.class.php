<?php
class Client {

  private $clientList = [
    0 => ['pid' => 10,'id' => 100, 'first_name' => 'James', 'last_name' => 'Kofmann', 'time' => '9:10 AM', 'kind' => 'Follow-up'],
    1 => ['pid' => 10,'id' => 101, 'first_name' => 'Roger', 'last_name' => 'Miller', 'time' => '11:10 AM', 'kind' => 'New Patient'],
    2 => ['pid' => 11,'id' => 102, 'first_name' => 'Nick', 'last_name' => 'Jones', 'time' => '9:30 AM', 'kind' => 'Follow-up'],
    3 => ['pid' => 11,'id' => 103, 'first_name' => 'Walter', 'last_name' => 'williams', 'time' => '11:30 AM', 'kind' => 'Follow-up'],
    4 => ['pid' => 12,'id' => 104, 'first_name' => 'Brian', 'last_name' => 'Quinnston', 'time' => '5:00 AM', 'kind' => 'New Patient'],
    5 => ['pid' => 12,'id' => 105, 'first_name' => 'Paul', 'last_name' => 'Johnston', 'time' => '3:10 PM', 'kind' => 'Follow-up'],
    6 => ['pid' => 12,'id' => 106, 'first_name' => 'George', 'last_name' => 'Calver', 'time' => '4:00 PM', 'kind' => 'New Patient']
  ];

  public function getClient($id){
    $str = '';
    foreach($this->clientList as $row){
      if($row['pid'] == $id){
        $str .= '
        <tr>
          <th scope="row">'.$row['id'].'</th>
          <td>'.$row['first_name'].' '.$row['last_name'].'</td>
          <td>'.$row['time'].'</td>
          <td>'.$row['kind'].'</td>
        </tr>
        ';
      }
    }
      print $str;
  }

}
?>
