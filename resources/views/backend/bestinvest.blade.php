@extends('backend.components.layout')

@section('main')
<div class="container-fluid">
    <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
        <h2 class="font-w600 title mb-2 mr-auto ">Meilleurs investisseurs</h2>
        <!-- <div class="weather-btn mb-2">
            <span class="mr-3 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
            <select class="form-control style-1 default-select  mr-3 ">
                <option>Medan, IDN</option>
                <option>Jakarta, IDN</option>
                <option>Surabaya, IDN</option>
            </select>
        </div> -->
        <!-- <a href="javascript:void(0);" class="btn btn-secondary mb-2"><i class="las la-calendar scale5 mr-3"></i>STATISTIQUES</a> -->
    </div>
    


   
    <div class="row">
    <div class="col-xl-12 col-xx-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Meilleurs investisseurs</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- <h6 style="text-align: center;color:#eb8153;">Top 10</h6> -->
                                <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">N°</th>
                                            <th scope="col">PARTS DÉTENUES</th>
                                            <th scope="col">MONTANT EN FCFA</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php   $i=1 ?>
                                        @foreach($bestindvestisor as $best)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>
                                                {{($best->nbr_share)}}
                                            </td>
                                            <td>{{($best->montant_investit)}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
      
    </div>
    <div class="row">
        <!-- <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="mb-0 fs-20 text-black">Sell Order</h4>
                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                <div class="btn sharp tp-btn" data-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 pb-0">
                            <div class="dropdown custom-dropdown d-block tbl-orders">
                                <div class="btn  d-flex align-items-center border-0 order-bg rounded " data-toggle="dropdown">
                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.4169 0.00384777C10.7089 -0.226161 0.233857 9.88466 0.00384777 22.5831C-0.226161 35.2815 9.88466 45.7661 22.5831 45.9961C35.2815 46.2261 45.7661 36.1153 45.9961 23.4073C46.2261 10.7089 36.1153 0.224273 23.4169 0.00384777ZM22.6598 41.6834C12.3573 41.4918 4.12485 32.9622 4.31652 22.6598C4.49861 12.3573 13.0281 4.12485 23.3306 4.30694C33.6427 4.49861 41.8655 13.0281 41.6834 23.3306C41.5013 33.6331 32.9622 41.8655 22.6598 41.6834Z" fill="#374C98" />
                                        <path d="M23.3038 6.22751C14.0555 6.06459 6.3981 13.4536 6.23518 22.7019C6.06267 31.9406 13.4517 39.598 22.7 39.7705C31.9483 39.9334 39.6057 32.5444 39.7686 23.3057C39.9315 14.0574 32.5521 6.40002 23.3038 6.22751ZM30.2136 32.7361H14.9564L16.8252 22.3952L14.6593 22.8457V21.0823L17.151 20.5552L18.7707 11.6615H24.8563L23.4763 19.2326L25.6039 18.7822V20.5456L23.1504 21.0535L21.732 28.8738H31.3445L30.2136 32.7361Z" fill="#374C98" />
                                    </svg>
                                    <div class="text-left ml-3">
                                        <span class="d-block fs-16 text-black">Litecoin</span>
                                    </div>
                                    <i class="fa fa-angle-down scale5 ml-auto"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Bitcoin</a>
                                    <a class="dropdown-item" href="javascript:void(0);">ETH coin</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-center bg-info-hover tr-rounded order-tbl">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Price</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">82.3</td>
                                            <td>0.15</td>
                                            <td class="text-right">$134,12</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">83.9</td>
                                            <td>0.18</td>
                                            <td class="text-right">$237,31</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">84.2</td>
                                            <td>0.25</td>
                                            <td class="text-right">$252,58</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">86.2</td>
                                            <td>0.35</td>
                                            <td class="text-right">$126,26</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">91.6</td>
                                            <td>0.75</td>
                                            <td class="text-right">$46,92</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">92.6</td>
                                            <td>0.21</td>
                                            <td class="text-right">$123,27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">93.9</td>
                                            <td>0.55</td>
                                            <td class="text-right">$212,56</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">94.2</td>
                                            <td>0.18</td>
                                            <td class="text-right">$129,26</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 p-0 caret">
                            <a href="coin-details.html" class="btn-link"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="mb-0 text-black fs-20">Buy Order</h4>
                            <div class="dropdown custom-dropdown mb-0 tbl-orders-style">
                                <div class="btn sharp tp-btn" data-toggle="dropdown">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                    <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3 pb-0">
                            <div class="dropdown custom-dropdown d-block tbl-orders">
                                <div class="btn  d-flex align-items-center order-bg border-0 rounded" data-toggle="dropdown">
                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.4169 0.00384778C10.7089 -0.226162 0.233857 9.88467 0.00384778 22.5831C-0.226162 35.2816 9.88467 45.7662 22.5831 45.9962C35.2816 46.2262 45.7662 36.1153 45.9962 23.4073C46.2262 10.7089 36.1153 0.224274 23.4169 0.00384778ZM22.6598 41.6835C12.3573 41.4918 4.12485 32.9623 4.31653 22.6598C4.49862 12.3573 13.0281 4.12485 23.3306 4.30694C33.6427 4.49862 41.8656 13.0281 41.6835 23.3306C41.5014 33.6332 32.9623 41.8656 22.6598 41.6835Z" fill="#FF782C" />
                                        <path d="M23.3019 6.22369C14.0536 6.06076 6.3962 13.4498 6.23327 22.6981C6.17864 25.6077 6.8773 28.3592 8.14427 30.7705H13.4163V14.2616C13.4163 13.2524 14.7877 12.9313 15.2334 13.837L23 29.5649L30.7667 13.838C31.2123 12.9313 32.5837 13.2524 32.5837 14.2616V30.7705H37.8395C39.0182 28.5298 39.7198 25.9997 39.7667 23.3019C39.9297 14.0536 32.5502 6.3962 23.3019 6.22369Z" fill="#FF782C" />
                                        <path d="M30.667 31.7289V18.3672L23.8587 32.1534C23.5367 32.808 22.4624 32.808 22.1403 32.1534L15.333 18.3672V31.7289C15.333 32.2579 14.9046 32.6872 14.3746 32.6872H9.34223C12.3237 36.8763 17.1712 39.6632 22.6981 39.7667C28.4455 39.8683 33.5747 37.0507 36.6769 32.6872H31.6254C31.0954 32.6872 30.667 32.2579 30.667 31.7289Z" fill="#FF782C" />
                                    </svg>
                                    <div class="text-left ml-3">
                                        <span class="d-block fs-16 text-black">Monero</span>
                                    </div>
                                    <i class="fa fa-angle-down scale5 ml-auto"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="javascript:void(0);">Dash coin</a>
                                    <a class="dropdown-item" href="javascript:void(0);">ETH coin</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-center bg-warning-hover tr-rounded order-tbl">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Price</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">82.3</td>
                                            <td>0.15</td>
                                            <td class="text-right">$134,12</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">83.9</td>
                                            <td>0.18</td>
                                            <td class="text-right">$237,31</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">84.2</td>
                                            <td>0.25</td>
                                            <td class="text-right">$252,58</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">86.2</td>
                                            <td>0.35</td>
                                            <td class="text-right">$126,26</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">91.6</td>
                                            <td>0.75</td>
                                            <td class="text-right">$46,92</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">92.6</td>
                                            <td>0.21</td>
                                            <td class="text-right">$123,27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">93.9</td>
                                            <td>0.55</td>
                                            <td class="text-right">$212,56</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">94.2</td>
                                            <td>0.18</td>
                                            <td class="text-right">$129,26</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 p-0 caret">
                            <a href="coin-details.html" class="btn-link"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mt-2">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black">Quick Trade</h4>
                                <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0 mb-0">
                                <div class="btn btn-light d-flex align-items-center svg-btn" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <svg class="mr-2" width="25" height="25" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M28.5 16.5002C28.4986 14.844 27.156 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.156 19.4985 28.4986 18.1559 28.5 16.5002Z" fill="#FFAB2D" />
                                        <path d="M16.5002 28.5H25.5003C27.1569 28.5 28.5 27.1569 28.5 25.5003C28.5 23.8432 27.1569 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D" />
                                        <path d="M21 9.15527e-05C9.40213 9.15527e-05 0.00012207 9.4021 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9867 9.40759 32.5924 0.0133667 21 9.15527e-05ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4997V32.9998C25.5003 33.8284 24.8283 34.4999 24.0002 34.4999C23.1717 34.4999 22.5001 33.8284 22.5001 32.9998V31.4997H19.5004V32.9998C19.5004 33.8284 18.8284 34.4999 18.0003 34.4999C17.1718 34.4999 16.5002 33.8284 16.5002 32.9998V31.4997H12.0004C11.1718 31.4997 10.5003 30.8282 10.5003 30.0001C10.5003 29.1715 11.1718 28.5 12.0004 28.5H13.5V13.5H12.0004C11.1718 13.5 10.5003 12.8285 10.5003 11.9999C10.5003 11.1714 11.1718 10.4998 12.0004 10.4998H16.5002V9.00018C16.5002 8.17163 17.1718 7.50009 18.0003 7.50009C18.8289 7.50009 19.5004 8.17163 19.5004 9.00018V10.4998H22.5001V9.00018C22.5001 8.17163 23.1717 7.50009 24.0002 7.50009C24.8288 7.50009 25.5003 8.17163 25.5003 9.00018V10.4998C28.7999 10.4861 31.486 13.1494 31.5002 16.4489C31.5075 18.1962 30.7499 19.8593 29.4265 21C30.7376 22.1279 31.4943 23.7699 31.5002 25.4998Z" fill="#FFAB2D" />
                                    </svg>
                                    <span class="text-black fs-16">Yearly (2021)</span>
                                    <i class="fa fa-angle-down text-black scale3 ml-2"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Weekly (2021)</a>
                                    <a href="#" class="dropdown-item ">Daily (2021)</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="form-wrapper">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Amount BTC</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="52.5">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text ">Price BPL</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="0,000000">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Fee (1%)</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="0,000000">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Total BPL</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="0,000000">
                                        </div>
                                    </div>
                                    <div class="row mt-4 align-items-center">
                                        <div class="col-lg-6">
                                            <div>
                                                <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="d-flex justify-content-end">
                                                <a href="javascript:void(0);" class="btn  btn-success text-white text-nowrap">
                                                    BUY
                                                    <svg class="ml-3 scale3" width="16" height="16" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z" fill="white" stroke="white"></path>
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-danger ml-3 text-nowrap">
                                                    SELL
                                                    <svg class="ml-3 scale5" width="16" height="16" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z" fill="white" stroke="white"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <!-- <div class="col-sm-6">
                    <div class="card-bx stacked card">
                        <img src="{{asset('backend/images/card/card1.jpg')}}" alt="">
                        <div class="card-info">
                            <p class="mb-1 text-white fs-14">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2744 18.8013H16.0334V23.616H19.2744C19.9286 23.616 20.5354 23.3506 20.9613 22.9053C21.4066 22.4784 21.672 21.8726 21.672 21.1989C21.673 19.8813 20.592 18.8013 19.2744 18.8013Z" fill="white" />
                                    <path d="M18 0C8.07429 0 0 8.07429 0 18C0 27.9257 8.07429 36 18 36C27.9257 36 36 27.9247 36 18C36 8.07531 27.9247 0 18 0ZM21.6627 26.3355H19.5398V29.6722H17.3129V26.3355H16.0899V29.6722H13.8528V26.3355H9.91954V24.2414H12.0898V11.6928H9.91954V9.59863H13.8528V6.3288H16.0899V9.59863H17.3129V6.3288H19.5398V9.59863H21.4735C22.5535 9.59863 23.5491 10.044 24.2599 10.7547C24.9706 11.4655 25.416 12.4611 25.416 13.5411C25.416 15.6549 23.7477 17.3798 21.6627 17.4744C24.1077 17.4744 26.0794 19.4647 26.0794 21.9096C26.0794 24.3453 24.1087 26.3355 21.6627 26.3355Z" fill="white" />
                                    <path d="M20.7062 15.8441C21.095 15.4553 21.3316 14.9338 21.3316 14.3465C21.3316 13.1812 20.3842 12.2328 19.2178 12.2328H16.0334V16.4695H19.2178C19.7959 16.4695 20.3266 16.2226 20.7062 15.8441Z" fill="white" />
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-bx stacked card">
                        <img src="{{asset('backend/images/card/card2.jpg')}}" alt="">
                        <div class="card-info">
                            <p class="fs-14 mb-1 text-white">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67" />
                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67" />
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-bx stacked card">
                        <img src="{{asset('backend/images/card/card3.jpg')}}" alt="">
                        <div class="card-info">
                            <p class="mb-1 text-white fs-14">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67" />
                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67" />
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-bx stacked card">
                        <img src="{{asset('backend/images/card/card4.jpg')}}" alt="">
                        <div class="card-info">
                            <p class="mb-1 text-white fs-14">Main Balance</p>
                            <div class="d-flex justify-content-between">
                                <h2 class="num-text text-white mb-5 font-w600">$673,412.66</h2>
                                <svg width="55" height="34" viewBox="0 0 55 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.0091" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67" />
                                    <circle cx="17.4636" cy="16.7788" r="16.7788" fill="white" fill-opacity="0.67" />
                                </svg>
                            </div>
                            <div class="d-flex">
                                <div class="mr-4 text-white">
                                    <p class="fs-12 mb-1 op6">VALID THRU</p>
                                    <span>08/21</span>
                                </div>
                                <div class="text-white">
                                    <p class="fs-12 mb-1 op6">CARD HOLDER</p>
                                    <span>Marquezz Silalahi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="col-xl-12 mt-2">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black">Quick Transfer</h4>
                                <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="dropdown custom-dropdown d-block mt-3 mt-sm-0 mb-0">
                                <div class="btn btn-light d-flex align-items-center svg-btn" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <svg class="mr-2" width="25" height="25" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 0C9.40213 0 0.00012207 9.40201 0.00012207 20.9999C0.00012207 32.5978 9.40213 41.9998 21 41.9998C32.5979 41.9998 41.9999 32.5978 41.9999 20.9999C41.9867 9.4075 32.5924 0.0132751 21 0ZM28.5 31.5001H16.5002C15.6717 31.5001 15.0001 30.8286 15.0001 30C15.0001 29.929 15.0052 29.8581 15.0152 29.7876L16.1441 21.8843L13.864 22.4547C13.7449 22.4849 13.6227 22.5 13.5 22.5C12.6715 22.4991 12.0009 21.8271 12.0013 20.9985C12.0022 20.311 12.4701 19.7122 13.137 19.5447L16.6018 18.6786L18.015 8.78723C18.1321 7.96692 18.892 7.39746 19.7123 7.51465C20.5327 7.63184 21.1021 8.39172 20.9849 9.21204L19.7444 17.8931L25.1364 16.545C25.9388 16.3403 26.755 16.8251 26.9592 17.6276C27.1638 18.43 26.679 19.2462 25.8766 19.4508C25.872 19.4518 25.8674 19.4531 25.8629 19.454L19.2857 21.0983L18.2287 28.4999H28.5C29.3286 28.4999 30.0001 29.1714 30.0001 30C30.0001 30.8281 29.3286 31.5001 28.5 31.5001Z" fill="#5974D5" />
                                    </svg>
                                    <span class="text-black fs-16">Yearly (2021)</span>
                                    <i class="fa fa-angle-down text-black scale3 ml-2"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Weekly (2021)</a>
                                    <a href="#" class="dropdown-item ">Daily (2021)</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Amount BTC</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="742.2">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3 mt-3 justify-content-between align-items-center">
                                <h4 class="text-black fs-20 mb-0">Recent Contacts</h4>
                                <a href="javascript:void(0);" class="btn-link">View more</a>
                            </div>
                            <div class="testimonial-one px-4 owl-right-nav owl-carousel owl-loaded owl-drag">
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded" src="{{asset('backend/images/contacts/Untitled-1.jpg')}}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">Samuel</a></h5>
                                        <span class="fs-12">@sam224</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded" src="{{asset('backend/images/contacts/Untitled-2.jpg')}}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">Cindy</a></h5>
                                        <span class="fs-12">@cindyss</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded" src="{{asset('backend/images/contacts/Untitled-3.jpg')}}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">David</a></h5>
                                        <span class="fs-12">@davidxc</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded" src="{{asset('backend/images/contacts/Untitled-4.jpg')}}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">Martha</a></h5>
                                        <span class="fs-12">@marthaa</span>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="text-center">
                                        <img class="mb-3 rounded" src="{{asset('backend/images/contacts/Untitled-5.jpg')}}" alt="">
                                        <h5 class="mb-0"><a class="text-black" href="javascript:void(0);">Olivia</a></h5>
                                        <span class="fs-12">@oliv62</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-sm-5 pt-3 align-items-center">
                                <div class="col-sm-6 mb-sm-0 mb-3">
                                    <p class="mb-0 fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                                </div>
                                <div class="col-sm-6">
                                    <a href="javascript:void(0);" class="btn btn-secondary d-block btn-lg">TRANSFER NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection