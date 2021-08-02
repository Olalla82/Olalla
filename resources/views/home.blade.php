<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera Vista</title>
</head>
<body>
    {{-- <h1>Hola Mundo Laravel - <?php /* echo "$nombre de $framework" */ ?></h1> --}}
    
    <h1>Hola Mundo Laravel - {{"$nombre de $framework"}} </h1>



    <ul>
        <?php foreach ($arrays as $key => $array)?>
           <li>{{$array}}</li>  
    </ul>
    <ul>

        @isset($array)
            Son frameworks de Javascript
        @endisset

        @empty($jamon)
            No usamos lenguaje de programación
        @endempty


        @foreach($arrays as $array)
        <li>
            @if($loop->first) 
                Primero:
            @endif
            
            @if($loop->last) 
                Último:
            @endif

            {{$array}}
        </li>
        @endforeach
    </ul>

   
   
    
</body>


</html>