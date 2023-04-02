<?php 



// class atau funciton yang telah di set menjadi final 
// maka class dan function tersebut tidak bisa lagi di turunkan atau di ovaraiding

class SosialMedia
{

}

class Facebook extends SosialMedia
{
    final public function login ($username, $password) : bool
    {
        return true;
    }
}

// error
class FaceFacebok extends Facebook
{
    // public function login ($username, $password) : bool
    // {
    //     return true;
    // }
}



?>