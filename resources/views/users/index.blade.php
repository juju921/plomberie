@extends('layouts.master')

@section('content')



        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Ajouter un client
                </div>
                <div class="card-body">





                    <table class="datatable table table-striped primary dataTable no-footer" cellspacing="0"
                           width="100%" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                           style="width: 100%;">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                style="width: 270px;">nom
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Position: activate to sort column ascending" style="width: 380px;">adresse
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Office: activate to sort column ascending" style="width: 212px;">Adresse de facturation
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Age: activate to sort column ascending" style="width: 97px;">créer une facture
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Start date: activate to sort column ascending" style="width: 185px;">créer un devis
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                aria-label="Salary: activate to sort column ascending" style="width: 179px;">modifier le profil
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td><p>This is user {{ $user->id }}</p></td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td><a href="{{url('inovoices/create',array($user->id))}}" class="btn btn-success">créer</a></td>
                            <td><button type="button" class="btn btn-success">créer</button></td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>$162,700</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>

            </div>

        </div>
        

@endsection