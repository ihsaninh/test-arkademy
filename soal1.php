<?php 

    function myBiodata() 
    {
        $biodata = [
            'name'    => 'Ihsan Nurul Habib',
            'address' => 'Kp.Babakan Tarikolot Cibinong Bogor',
            'hobbies' => ['ngoding', 'playing badminton', 'watching soccer'],
            'is_married' => false,
            'school' => (object) [ 
                'highSchool' => 'SMKN 2 Bogor',
                'university' => ''
            ],
            'skills' => (object) [
                'HTML', 'CSS','JS', 'PHP'
            ] 
        ];

        return json_encode($biodata);
    }

     echo myBiodata();

?>