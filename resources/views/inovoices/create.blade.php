
@extends('layouts.master')

@section('content')
    <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
            <div class="navbar-collapse collapse in">
                <ul class="nav navbar-nav navbar-mobile">
                    <li>
                        <button type="button" class="sidebar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                    </li>
                    <li class="logo">
                        <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                    </li>
                    <li>
                        <button type="button" class="navbar-toggle">
                            <img class="profile-img" src="./assets/images/profile.png">
                        </button>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="navbar-title">Dashboard</li>
                    <li class="navbar-search hidden-sm">
                        <input id="search" type="text" placeholder="Search..">
                        <button class="btn-search"><i class="fa fa-search"></i></button>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown notification">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                            <div class="title">New Orders</div>
                            <div class="count">0</div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-header">Ordering</li>
                                <li class="dropdown-empty">No New Ordered</li>
                                <li class="dropdown-footer">
                                    <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown notification warning">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                            <div class="title">Unread Messages</div>
                            <div class="count">99</div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-header">Message</li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-warning pull-right">10</span>
                                        <div class="message">
                                            <img class="profile" src="https://placehold.it/100x100">
                                            <div class="content">
                                                <div class="title">"Payment Confirmation.."</div>
                                                <div class="description">Alan Anderson</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-warning pull-right">5</span>
                                        <div class="message">
                                            <img class="profile" src="https://placehold.it/100x100">
                                            <div class="content">
                                                <div class="title">"Hello World"</div>
                                                <div class="description">Marco Harmon</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-warning pull-right">2</span>
                                        <div class="message">
                                            <img class="profile" src="https://placehold.it/100x100">
                                            <div class="content">
                                                <div class="title">"Order Confirmation.."</div>
                                                <div class="description">Brenda Lawson</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown notification danger">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                            <div class="title">System Notifications</div>
                            <div class="count">10</div>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li class="dropdown-header">Notification</li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">8</span>
                                        <div class="message">
                                            <div class="content">
                                                <div class="title">New Order</div>
                                                <div class="description">$400 total</div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">14</span>
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">5</span>
                                        Issues Report
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown profile">
                        <a href="/html/pages/profile.html" class="dropdown-toggle" data-toggle="dropdown">
                            <img class="profile-img" src="./assets/images/profile.png">
                            <div class="title">Profile</div>
                        </a>
                        <div class="dropdown-menu">
                            <div class="profile-info">
                                <h4 class="username">Scott White</h4>
                            </div>
                            <ul class="action">
                                <li>
                                    <a href="#">
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge badge-danger pull-right">5</span>
                                        My Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Setting
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Basic Elements
            </div>

            <form method="POST" action="/inovoices">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Invoice No.</label>
                            <input type="text" class="form-control" v-model="form.invoice_no">
                        </div>
                        <div class="form-group">
                            <label>Client</label>
                            <input type="text" class="form-control" v-model="form.client">

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Client Address</label>
                            <textarea class="form-control" v-model="form.client_address"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" v-model="form.title">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Invoice Date</label>
                                <input type="date" class="form-control" v-model="form.invoice_date">
                            </div>
                            <div class="col-sm-6">
                                <label>Due Date</label>
                                <input type="date" class="form-control" v-model="form.due_date">

                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{--<div v-if="errors.products_empty">--}}
                    {{--<p class="alert alert-danger">@{{errors.products_empty[0]}}</p>--}}
                    {{--<hr>--}}
                {{--</div>--}}
                <table class="table table-bordered table-form">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="product in form.products">
                        <td class="table-name" :class="{'table-error': errors['products.' + $index + '.name']}">
                            <textarea class="table-control" v-model="product.name"></textarea>
                        </td>
                        <td class="table-price" :class="{'table-error': errors['products.' + $index + '.price']}">
                            <input type="text" class="table-control"  v-model="product.price">
                        </td>
                        <td class="table-qty" :class="{'table-error': errors['products.' + $index + '.qty']}">
                            <input type="text" class="table-control" v-model="product.qty">
                        </td>
                        <td class="table-total">
                            <span class="table-text"></span>
                        </td>
                        <td class="table-remove">
                            <span @click="remove(product)" class="table-remove-btn">&times;</span>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td class="table-empty" colspan="2">
                            <span @click="addLine" class="table-add_line">Add Line</span>
                        </td>
                        <td class="table-label">Sub Total</td>
                        <td class="table-amount"></td>
                    </tr>
                    <tr>
                        <td class="table-empty" colspan="2"></td>
                        <td class="table-label">Discount</td>
                        <td class="table-discount" :class="{'table-error': errors.discount}">
                            <input type="text" class="table-discount_input" v-model="form.discount">
                        </td>
                    </tr>
                    <tr>
                        <td class="table-empty" colspan="2"></td>
                        <td class="table-label">Grand Total</td>
                        <td class="table-amount"></td>
                    </tr>
                    </tfoot>
                </table>



            </form>


        </div>




        <button id="show-modal" @click="showModal = true">Show Modal</button>
        <!-- use the modal component, pass in the prop -->
        <modal v-if="showModal" @close="showModal = false">
        <!--
          you can use custom content here to overwrite
          default content
        -->
        <h3 slot="header">custom header</h3>
        </modal>






@endsection

@push('scripts')


<script  src="{{asset('js/vendor.js')}}" ></script>
<script  src="{{asset('js/apps.js')}}" ></script>

<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
        <script>




        </script>

@endpush