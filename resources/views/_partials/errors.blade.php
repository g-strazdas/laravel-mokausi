{{--Jei klaidų masyve yra, tada apiforminame pagal bootstrap "alert alert-danger" ir jas--}}
{{--pateikiame į unnumbered list foreach cikle kaip kiekvieną masyvo $errors elementą $error--}}

@if($errors->any())
{{--    {{dd($errors->all())}}--}}
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
{{--                {{str($error)->replace(' company.', ' Įmonės pavadinimas.')}}--}}
{{--                {{str($error)->replace(' code.', ' PVM kodas.')}}--}}
                <li>{{$error}}</li>

            @endforeach
        </ul>
    </div>
@endif
