<h1>Records</h1>

<ul>
    <?php
    foreach ($records as $key => $record){
        echo "<li>Record $key: $record</li>";
        //echo '<li>' . $record . '</li>';
    }
    ?>
</ul>

{{--<ul>
    @foreach ($records as $key => $record)
        <li>Record {{$key}}: {{ $record }}</li>
    @endforeach
</ul>--}}
