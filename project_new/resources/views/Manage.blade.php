@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card card-default">
                <div class="card-header">Gebruikers</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Rang</th>
                                    <th scope="col">Bedrijfs ID</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                            @if (auth()->user()->rank=='Admin'||auth()->user()->rank=='Assessor') 
                                    @foreach ($uid as $p) 
                                    <tr>
                                    </td><th scope="row">
                                    {{ $p->id }}
                                    </th><td>
                                    {{ $p->name }}
                                    </td><td>
                                    {{ $p->email }}
                                    </td><td>
                                    {{ $p->rank }}
                                    </td><td>
                                    {{ $p->BedrijfsID}}
                                    </td><td>
                                    <a href="Manage/{{ $p->id }}">Edit</a>
                                    @endforeach
                            @endif
                        </table>
                    </div>
                        {{ $uid->links() }}

                    </div>
            </div>
            <!--
            <div class="row">
                <div class="card card-default">
                    <div class="card-header">Recente gebruikers activiteit</div>
                        <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Naam</th>
                                    <th scope="col">IP Adres</th>
                                </tr>
                            </thead>
                        <?php /* foreach($activities as $activity){
                            echo '<tr>
                                <td scope="row">';
                            echo $activity->user->name;
                            echo '</td><td>';
                            echo $activity->user->ip_adress;
                            echo '</td>
                            </tr>';
                        }*/?>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
