<table>
    <thead>
        <tr>
            <td>Título</td>
            <td>Posteado</td>
            <td>Creación</td>
            <td>Actualizacion</td>
            <td>Acciones</td>
        </tr>

    </thead>
    <tbody>
        <tr>
        @foreach($posts as $post)
            <td>{{$post->title}}</td>
            <td>{{$post->posted}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td></td>
        </tr>
        @endforeach

    </tbody>
</table>