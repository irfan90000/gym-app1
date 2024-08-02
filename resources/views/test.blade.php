@extends('layouts.admin.app')

@section('title', translate('Order Details'))

@push('css_or_js')

@endpush
@php
    $openedRegister = App\Models\Register::where('admin_id', auth('admin')->user()->id)->whereDate('open_time', date('Y-m-d'))->opened()->first();
    $batchStatus = $openedRegister ? 'open' : 'close';
@endphp
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
            <h2 class="h1 mb-0 d-flex align-items-center gap-1">
                <img width="20" class="avatar-img" src="{{asset('assets/admin/img/icons/order_details.png')}}" alt="">
                <div class="page-header-title">
                    <span>{{translate('order')}}: #{{$order['id']}} </span>
                    <span class="ml-4">{{translate('Items')}}: {{$order->details->count()}}</span>
                    @if($order['order_type'] == 'dine_in')
                        <span class="ml-4">{{translate('Table')}}: {{$order->table ? $order->table->number : 'Table deleted!'}}</span>
                        @if ($order->bar_id)
                            <span class="ml-4">{{translate('Bar')}}: {{$order->bar ? $order->bar->number : 'Bar deleted!'}}</span>
                        @endif
                        @if($order['number_of_people'] != null)
                            <span class="ml-4">{{translate('Guests')}}: {{$order->number_of_people}}</span>
                        @endif
                    @endif
                    <span class="ml-4">
                        {{translate('Server')}}: {{ $order->server_name ?? 'N/A' }}
                    </span>
                    @if (in_array($order->order_type, ['dine_in']) && auth('admin')->user()->isAdminOrManager() && !$order->isOrderCompleted())
                        <span class="ml-2">
                            <a href="javascript:void(0)" class="btn btn-outline-success square-btn edit-server-btn" data-toggle="modal" data-target="#changeServerModal"><i class="tio-edit"></i></a>
                        </span>
                    @endif
                    <span class="ml-4">{{translate('Order Type')}}: {{str_replace('_',' ',$order['order_type'])}}</span>
                </div>
            </h2>
        </div>
        <!-- End Page Header -->

        <div class="row" id="printableArea-">
            <div class="col-lg-9 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->ct-callToAction ct-callToAction--type1ct-pricingTable ct-pricingTable-primary
                    <div class="px-card py-3">
                        <div class="row gy-2">
                            <div class="col-sm-3 d-flex flex-column">
                                <h5 class="text-capitalize">
                                    <span>
                                        <i class="tio-date-range"></i>
                                        {{date('d M Y',strtotime($order['created_at']))}} {{ date(config('time_format'), strtotime($order['created_at'])) }}
                                    </span>
                                </h5>
                                <h5 class="text-capitalize">
                                    <span>{{translate('Authorization Code')}}: {{ $order->authorization_code ?? 'N/A' }}</span>
                                </h5>
                                @if ($order['order_note'])
                                    <h5>
                                        <span>{{translate('order')}} {{translate('note')}} : {{$order['order_note']}}</span>
                                    </h5>
                                @endif
                                @if (in_array($order->order_status, ['refund', 'void']))
                                    <br>
                                    <h5>{{ucfirst($order->order_status)}} {{translate('Reason:')}}</h5>
                                    <p>{{$order['refund_reason']}}</p>
                                @endif
                                @if ($order->extra_discount_reason)
                                    <br>
                                    <h5 class="text-capitalize"><span>Discount Reason:</span></h5>
                                    <p>{{ $order->extra_discount_reason }}</p>
                                @endif
                                @if ($order->splitOrders->count() || $order->orderSplits->count())
                                    <h5 class="text-capitalize"><span>Split Check</span></h5>
                                @endif
                            </div>

                            <div class="col-sm-9">
                                <div class="text-sm-right">
                                    <div class="d-flex flex-wrap gap-2 justify-content-sm-end">

                                        @if($order['order_type']!='take_away' && $order['order_type'] != 'pos' && $order['order_type'] != 'dine_in')
                                            <div class="hs-unfold ml-1">
                                                @if($order['order_status']=='out_for_delivery')
                                                    @php($origin=\App\Model\DeliveryHistory::where(['deliveryman_id'=>$order['delivery_man_id'],'order_id'=>$order['id']])->first())
                                                    @php($current=\App\Model\DeliveryHistory::where(['deliveryman_id'=>$order['delivery_man_id'],'order_id'=>$order['id']])->latest()->first())
                                                    @if(isset($origin))
                                                        <a class="btn btn-outline-primary" target="_blank"
                                                           title="{{translate('Delivery Man Last Location')}}" data-toggle="tooltip" data-placement="top"
                                                           href="https://www.google.com/maps/dir/?api=1&origin={{$origin['latitude']}},{{$origin['longitude']}}&destination={{$current['latitude']}},{{$current['longitude']}}">
                                                            <i class="tio-map"></i> {{translate('Show_Location_in_Map')}}
                                                        </a>
                                                    @else
                                                        <a class="btn btn-outline-primary" href="javascript:" data-toggle="tooltip"
                                                           data-placement="top" title="{{translate('Waiting for location...')}}">
                                                            <i class="tio-map"></i> {{translate('Show_Location_in_Map')}}
                                                        </a>
                                                    @endif
                                                @else
                                                    <a class="btn btn-outline-dark" href="javascript:" onclick="last_location_view()"
                                                       data-toggle="tooltip" data-placement="top"
                                                       title="{{translate('Only available when order is out for delivery!')}}">
                                                        <i class="tio-map"></i> {{translate('Show_Location_in_Map')}}
                                                    </a>
                                                @endif
                                            </div>
                                        @endif
                                        @if($order->details->count())
                                            <div class="d-flex">
                                                @if (auth('admin')->user()->isAdminOrManager())
                                                    <div class=" p-2 bd-highlight">
                                                        <form id="voidFormId" action="{{ route('admin.pos.quick-view-void') }}" method="get">
                                                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                                                            <button data-id="{{ $order->id }}" class="btn btn-danger submit-void-form fz-custom btn-custom" type="button"> {{translate('Void')}} </button>
                                                        </form>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                        <a href="#" class="btn btn-primary refund-button fz-custom btn-custom" onclick="quickViewRefund({{ $order['id'] }})"> {{ translate('Refund') }}</a>
                                                    </div>
                                                @endif
                                                <div class="p-2 bd-highlight">
                                                    <button class="btn btn-info fz-custom btn-custom" onclick="print_invoice('{{$order->id}}')">Print Check</button>
                                                </div>
                                                @if($order->hasAddOnItems())
                                                    <div class="p-2 bd-highlight">
                                                        <button class="btn btn-blue fz-custom btn-custom" onclick="print_invoice_addon('{{$order->id}}')" title="Print Addon Items">Print Add-on Items</button>
                                                    </div>
                                                @endif
                                                <div class="p-2 bd-highlight">
                                                    <button class="btn btn-green btn-print-selected-item fz-custom btn-custom" onclick="print_invoice('{{$order->id}}', true)" title="Print Addon Items" disabled>Print Items for Kitchen / Bar</button>
                                                </div>
                                                <div class="p-2 bd-highlight">
                                                    <a href ="javascript:void(0)" class="btn btn-blue btn-print-selected-item fz-custom btn-custom" data-toggle="modal" data-target="#updateItemDiscountModal">
                                                        Discount Items
                                                    </a>
                                                </div>
                                                <div class="p-2 bd-highlight">
                                                    <a href="javascript:void(0)" class="btn btn-blue btn-print-selected-item fz-custom btn-custom" data-toggle="modal" data-target="#updateDiscountModal">
                                                        Discount Check
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    @if(!in_array($order['payment_method'], ['cash_on_delivery', 'wallet_payment', 'offline_payment']))
                                        @if($order['transaction_reference']==null && $order['order_type']!='pos' && $order['order_type'] != 'dine_in')
                                            <div class="d-flex gap-3 justify-content-sm-end align-items-center mb-3">
                                                <span>{{translate('reference')}} {{translate('code')}} :</span>
                                                <button class="btn btn-outline-primary px-3 py-1" data-toggle="modal"
                                                        data-target=".bd-example-modal-sm">
                                                    {{translate('add')}}
                                                </button>
                                            </div>
                                        @elseif($order['order_type']!='pos' && $order['order_type'] != 'dine_in')
                                            <div class="d-flex gap-3 justify-content-sm-end align-items-center mb-3">
                                                <span>{{translate('reference')}} {{translate('code')}}</span>
                                                : {{$order['transaction_reference']}}
                                            </div>
                                        @endif
                                    @endif

                                    @if($order->order_type == 'delivery')
                                        <div class="d-flex gap-3 justify-content-sm-end mb-3">
                                            <div><span>{{ translate('Delivery distance') }}</span>:</div>
                                            <span class="badge-soft-danger px-2 rounded text-capitalize">{{ $order->delivery_distance ?? 0 }} km</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <div class="table-responsive">
                        <table class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                            <tr>
                                <th>{{translate('SL')}}</th>
                                <th><input type="checkbox" class="custom-checkbox select-all-checkbox" data-class="products_details_ids"></th>
                                <th>{{translate('Items')}}</th>
                                <th>{{translate('Qty')}}</th>
                                <th class="px-2" width="10%">{{translate('Price')}}</th>
                                <th class="px-2" width="10%">{{translate('Discount')}}</th>
                                <th class="px-2" width="10%">{{translate('Tax')}}</th>
                                <th class="text-right px-2" width="10%">{{translate('Total_price')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                            </tr>
                            @php($sub_total=0)
                            @php($total_tax=0)
                            @php($total_dis_on_pro=0)
                            @php($add_ons_cost=0)
                            @php($add_on_tax=0)
                            @php($add_ons_tax_cost=0)
                            @foreach($order->details as $detail)
                                @php($product_details = json_decode($detail['product_details'], true))
                                @php($add_on_qtys=json_decode($detail['add_on_qtys'],true))
                                @php($add_on_prices=json_decode($detail['add_on_prices'],true))
                                @php($add_on_taxes=json_decode($detail['add_on_taxes'],true))

                                <tr class="select-row-item {{ $detail->is_addon ? 'addon-product-row' : '' }} {{ (!$detail->print_status && $detail->is_addon) ? 'not-printed-item' : '' }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" class="custom-checkbox products_details_ids" name="products_details_ids[]" id="" value="{{ $detail->id }}" @if(!$detail->print_status && !in_array($detail->order_status, ['void', 'refund'])) checked @endif @if (in_array($detail->order_status, ['void', 'refund'])) disabled @endif>
                                    </td>
                                    <td>
                                        <div class="media gap-3 w-max-content">

                                            <div class="media-body text-dark">
                                                {{--<h6 class="text-capitalize">{{$detail->product?->name}}</h6>--}}
                                                <h3 class="text-capitalize">{{$product_details['name']}}</h3>

                                                @if($product_details['id'] == 'custom_food' || $product_details['id'] == 'custom_drink')
                                                    <div class="product_description fz-14">
                                                        {{ $product_details['description'] ?? '' }}
                                                    </div>
                                                @endif

                                                <div class="d-flex gap-2">
                                                    @if (isset($detail['variation']))
                                                        @foreach(json_decode($detail['variation'],true) as  $variation)
                                                            @if (isset($variation['name'])  && isset($variation['values']))
                                                                <span class="d-block text-capitalize">
                                                                <strong>{{  $variation['name']}} -</strong>
                                                            </span>
                                                                @foreach ($variation['values'] as $value)

                                                                    <span class="d-block text-capitalize">
                                                                     {{ $value['label']}} :
                                                                    <strong>{{\App\CentralLogics\Helpers::set_symbol( $value['optionPrice'])}}</strong>
                                                                </span>
                                                                @endforeach
                                                            @else
                                                                @if (isset(json_decode($detail['variation'],true)[0]))
                                                                    <strong><u> {{  translate('Variation') }} : </u></strong>
                                                                    @foreach(json_decode($detail['variation'],true)[0] as $key1 =>$variation)
                                                                        <div class="font-size-sm text-body">
                                                                            <span>{{$key1}} :  </span>
                                                                            <span class="font-weight-bold">{{$variation}}</span>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                    @php($addon_ids = json_decode($detail['add_on_ids'],true))
                                                    @if ($addon_ids)
                                                        <span>
                                                        <u><strong>{{translate('addons')}}</strong></u>
                                                        @foreach($addon_ids as $key2 =>$id)
                                                                @php($addon=\App\Model\AddOn::find($id))
                                                                @php($add_on_qtys==null? $add_on_qty=1 : $add_on_qty=$add_on_qtys[$key2])

                                                                <div class="font-size-sm text-body">
                                                                    <span>{{$addon ? $addon['name'] : translate('addon deleted')}} :  </span>
                                                                    <span class="font-weight-semibold">
                                                                        {{$add_on_qty}} x {{ \App\CentralLogics\Helpers::set_symbol($add_on_prices[$key2]) }} <br>
                                                                    </span>
                                                                </div>
                                                                @php($add_ons_cost+=$add_on_prices[$key2] * $add_on_qty)
                                                                @php($add_ons_tax_cost +=  $add_on_taxes[$key2] * $add_on_qty)
                                                            @endforeach
                                                    </span>
                                                    @endif


                                                </div>
                                            </div>
                                        </div>
                                        @if(!empty($detail['serve_first']))
                                            <div class="text-desc">
                                                <span> {{ $detail->serve_first }}</span>
                                            </div>
                                        @endif
                                        @if(!empty($detail['heat']))
                                            <div class="text-desc">
                                                <span class="">Heat: {{ $detail->getHeatName() }}</span>
                                            </div>
                                        @endif
                                        @if(!empty($detail['to_go']))
                                            <div class="text-desc">
                                                <span> {{ $detail->to_go }}</span>
                                            </div>
                                        @endif
                                        @if(!empty($detail['dont_make']))
                                            <div class="text-desc">
                                                <span> {{ $detail->dont_make }}</span>
                                            </div>
                                        @endif
                                        @if(!empty($detail['rush']))
                                            <div class="text-desc">
                                                <span> {{ $detail->rush }}</span>
                                            </div>
                                        @endif
                                        @if(!empty($detail['kitchen_note']))
                                            <div class="text-desc">
                                                <span class="">{{ translate('Kitchen Note') }}: </span>
                                                <span> {{ $detail['kitchen_note'] ?? '' }}</span>
                                            </div>
                                        @endif
                                        @if (in_array($detail->order_status, ['void', 'refund']))
                                            <div class="text-desc">
                                                <span class="">{{translate('Status')}}: </span>
                                                <span>{{ ucfirst($detail->order_status) }}</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if (auth('admin')->user()->isAdminOrManager() && $order->payment_status == 'unpaid')
                                            <div class=" quantity d-flex align-items-center">
                                                <button class="btn btn-primary cart-quantity-btn" value="-" type="button" data-key="{{ $detail->id }}"><i class="tio-remove font-weight-bold"></i></button>
                                                <input id="quantityValue" type="number" class="form-control qty qty-{{ $detail->id }}" data-key="{{ $detail->id }}" value="{{ $detail->quantity }}" min="1" onkeyup="updateQuantity(event)" >
                                                <button class="btn btn-primary cart-quantity-btn" value="+" type="button" data-key="{{ $detail->id }}"><i class="tio-add font-weight-bold"></i></button>
                                            </div>
                                        @else
                                            <span>{{$detail['quantity']}}</span>
                                        @endif
                                    </td>
                                    <td class="px-2">
                                        <span class="d-block text-capitalize">
                                            @php($amount=$detail['price']*$detail['quantity'])
                                            {{\App\CentralLogics\Helpers::set_symbol($amount)}}
                                        </span>
                                    </td>
                                    <td class="px-2">
                                        <span class="d-block text-capitalize">
                                            @php($tot_discount = $detail['discount_on_product'])
                                            {{\App\CentralLogics\Helpers::set_symbol($tot_discount)}}
                                        </span>
                                    </td>
                                    <td class="px-2">
                                        <span class="d-block text-capitalize">
                                            @php($product_tax = $detail['tax_amount']*$detail['quantity'])
                                            {{\App\CentralLogics\Helpers::set_symbol($product_tax + $add_ons_tax_cost)}}
                                        </span>
                                    </td>
                                    <td class="text-right px-2">
                                        <span class="d-block text-capitalize">
                                            {{\App\CentralLogics\Helpers::set_symbol($amount-$tot_discount + $product_tax)}}
                                        </span>
                                    </td>
                                </tr>
                                @php($total_dis_on_pro += $tot_discount)
                                @php($sub_total =  $sub_total +  $amount)
                                @php($total_tax += $product_tax)

                            @endforeach
                            <tr>
                                <td></td>
                                <td colspan="7">
                                    @if (!$order->isOrderCompleted() && $order->payment_status == 'unpaid')
                                        <a href="{{ route('admin.pos.editOrder', [$order->id]) }}" class="btn btn-primary fz-custom mr-2 mt-4">Add Items {{ $order->order_type == 'dine_in' ? ', Change Table, Guests' : ''}}</a>
                                        <button class="btn btn-green btn-repeat-selected-item fz15 mt-4 mr-5 fz-custom" disabled onclick="repeatItems('{{$order->id}}', '{{ csrf_token() }}')" title="Repeat Items">Repeat Items</button>
                                    @endif

                                    @if (auth('admin')->user()->isAdminOrManager())
                                        @if (!$order->isOrderCompleted() && $order->payment_status == 'unpaid')
                                            <button class="btn btn-danger btn-remove-selected-item d-none fz15 mt-4 mr-2 fz-custom" onclick="removeItems('{{$order->id}}', '{{ csrf_token() }}')" title="Remove Items"><i class="tio-delete"></i> Remove Items</button>
                                        @endif
                                    @endif

                                    <a class="btn btn-primary fz15 mr-2 mt-4 fz-custom" href="{{ route('admin.orders.splitOrder', [$order->id]) }}">Split Order</a>
                                    @if (!$order->isOrderCompleted() && $order->payment_status == 'unpaid')
                                        <a class="btn btn-danger fz15 mr-5 mt-4 fz-custom" href="{{ route('admin.orders.transferItems', [$order->id]) }}">Transfer Items</a>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-body pt-0">
                        <hr>
                        <div class="row justify-content-md-end mb-3">
                            <div class="col-md-9 col-lg-8">
                                <dl class="row">
                                    @if ($order->order_type == 'take_away')
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                Packaging<span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">{{ \App\CentralLogics\Helpers::set_symbol($order->packaging_charge) }}</dd>
                                    @endif
                                    <dt class="col-6">
                                        <div class="d-flex max-w220 ml-auto">
                                            {{translate('subtotal')}}<span>:</span>
                                        </div>
                                    </dt>
                                    <dd class="col-6 text-dark text-right">{{ \App\CentralLogics\Helpers::set_symbol($sub_total) }}</dd>

                                    @if($order->extra_discount > 0)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Discount')}} {{ $order->extra_discount_discount }}{{ $order->extra_discount_type == 'percent' ? '%' : '$' }}</span>
                                                <span>: <a href="javascript:void(0)" data-toggle="modal" data-target="#removeDiscountModal"><i class="tio-delete"></i></a></span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">- {{ \App\CentralLogics\Helpers::set_symbol($order->extra_discount) }}</dd>
                                    @endif

                                    @if($order->items_discount > 0)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Total Discount')}}: <a href="javascript:void(0)" data-toggle="modal" data-target="#removeItemDiscountModal"><i class="tio-delete"></i></a></span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">- {{ \App\CentralLogics\Helpers::set_symbol($order->items_discount) }}</dd>
                                    @endif

                                    <!-- Gratuity -->
                                    @if ($order->number_of_people >= 6 && $order->order_type == 'dine_in')
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Gratuity')}} </span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">
                                            {{ \App\CentralLogics\Helpers::set_symbol($order->gratuity_amount) }}
                                        </dd>
                                    @endif
                                    <!-- GST amount -->
                                    <dt class="col-6">
                                        <div class="d-flex max-w220 ml-auto">
                                            <span>{{translate('GST')}}</span>
                                            <span>:</span>
                                        </div>
                                    </dt>
                                    <dd class="col-6 text-dark text-right">{{ \App\CentralLogics\Helpers::set_symbol($order->total_tax_amount) }}</dd>
                                    @if ($order->pst_amount)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('PST')}} 10% (Alcohol)</span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">{{ \App\CentralLogics\Helpers::set_symbol($order->pst_amount) }}</dd>
                                    @endif
                                    <!-- Delivery charge -->
                                    @if($order->order_type == 'delivery')
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Delivery charge')}}</span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">{{ \App\CentralLogics\Helpers::set_symbol($order->delivery_charge) }}</dd>
                                    @endif

                                    @if ($order->total_refund_amount)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Refund')}} </span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">
                                            - {{ \App\CentralLogics\Helpers::set_symbol($order->total_refund_amount) }}
                                        </dd>
                                    @endif

                                    @if($order->tip_amount)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Tip')}}</span>
                                                <span>: @if (auth('admin')->user()->isAdminOrManager()) <a href="javascript:void(0)" data-toggle="modal" data-target="#editTipAmount" title="Edit"><i class="tio-edit"></i></a> @endif</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">{{ \App\CentralLogics\Helpers::set_symbol($order->tip_amount) }}</dd>
                                    @endif

                                    <!-- Cash order cash & change -->
                                    @if($order->recieve_cash)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>Paid by {{translate('Cash')}}</span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">
                                            {{ \App\CentralLogics\Helpers::set_symbol($order->recieve_cash) }}
                                        </dd>
                                    @endif

                                    @if($order->change_cash_amount)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>{{translate('Change')}}</span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">
                                            {{ \App\CentralLogics\Helpers::set_symbol($order->change_cash_amount) }}
                                        </dd>
                                    @endif

                                    @if($order->extra_payment_method)
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                                <span>Paid by {{ $order->getExtraPaymentMethod() }} </span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">
                                            {{ \App\CentralLogics\Helpers::set_symbol($order->extraPaymentMethodAmount()) }}
                                        </dd>
                                    @endif

                                    <dt class="col-6 border-top pt-2 fz-16 font-weight-bold">
                                        <div class="d-flex max-w220 ml-auto">
                                            <span>{{translate('total')}}</span>
                                            <span>:</span>
                                        </div>
                                    </dt>
                                    <dd class="col-6 border-top pt-2 fz-16 font-weight-bold text-dark text-right">

                                        <input type="hidden" name="total_bill"  value="{{  \App\CentralLogics\Helpers::set_symbol($order->totalOrderAmount()) }}">
                                        {{ \App\CentralLogics\Helpers::set_symbol($order->totalOrderAmount()) }}

                                    </dd>

                                    <!-- partial payment-->
                                    @if ($order->order_partial_payments->isNotEmpty())
                                        @foreach($order->order_partial_payments as $partial)
                                            <dt class="col-6">
                                                <div class="d-flex max-w220 ml-auto">
                                            <span>
                                                {{translate('Paid By')}} ({{str_replace('_', ' ',$partial->paid_with)}})</span>
                                                    <span>:</span>
                                                </div>
                                            </dt>
                                            <dd class="col-6 text-dark text-right">
                                                {{ \App\CentralLogics\Helpers::set_symbol($partial->paid_amount) }}
                                            </dd>
                                        @endforeach
                                            <?php
                                            $due_amount = 0;
                                            $due_amount = $order->order_partial_payments->first()?->due_amount;
                                            ?>
                                        <dt class="col-6">
                                            <div class="d-flex max-w220 ml-auto">
                                            <span>
                                                {{translate('Due Amount')}}</span>
                                                <span>:</span>
                                            </div>
                                        </dt>
                                        <dd class="col-6 text-dark text-right">
                                            {{ \App\CentralLogics\Helpers::set_symbol($due_amount) }}
                                        </dd>
                                    @endif
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>

            {{--@if($order->customer)--}}
            <div class="col-lg-3">
                @if($order['order_type'] != 'pos')
                    <div class="card mb-3">
                        <div class="card-body text-capitalize d-flex flex-column gap-4">
                            <h4 class="mb-0 text-center">{{translate('Order_Setup')}}</h4>

                            @if(isset($order->offline_payment))
                                <div class="card mt-3">
                                    <div class="card-body text-center">
                                        @if($order->offline_payment?->status == 1)
                                            <h4 class="">{{ translate('Payment_verified') }}</h4>
                                        @else
                                            <h4 class="">{{ translate('Payment_verification') }}</h4>
                                            <p class="text-danger">{{ translate('please verify the payment before confirm order') }}</p>
                                            <div class="mt-3">
                                                <button class="btn btn-primary" type="button"
                                                        data-id="{{ $order['id'] }}"
                                                        data-target="#payment_verify_modal" data-toggle="modal">{{ translate('Verify_Payment') }}
                                                </button>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            @endif

                            @if($order['order_type'] != 'pos')
                                <div class="hs-unfold w-100">
                                    <label class="font-weight-bold text-dark fz-18">{{translate('Change_Order_Status')}}</label>
                                    <div class="dropdown">
                                        <button class="form-control h--45px dropdown-toggle d-flex justify-content-between align-items-center w-100" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            {{ translate($order['order_status'])}}
                                        </button>
                                        <div class="dropdown-menu text-capitalize" aria-labelledby="dropdownMenuButton">
                                            @if($order['payment_method'] == 'offline_payment' && $order->offline_payment?->status != 1)
                                                @if($order['order_type'] != 'dine_in')
                                                    <a class="dropdown-item"
                                                       onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                       href="javascript:">{{translate('pending')}}</a>
                                                @endif

                                                <a class="dropdown-item"
                                                   onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                   href="javascript:">{{translate('confirmed')}}</a>

                                                @if($order['order_type'] != 'dine_in')
                                                    <a class="dropdown-item"
                                                       onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                       href="javascript:">{{translate('processing')}}</a>
                                                    <a class="dropdown-item"
                                                       onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                       href="javascript:">{{translate('out_for_delivery')}}</a>
                                                    <a class="dropdown-item"
                                                       onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                       href="javascript:">{{translate('delivered')}}</a>
                                                    <a class="dropdown-item"
                                                       onclick="route_alert('{{route('admin.orders.status',['id'=>$order['id'],'order_status'=>'returned'])}}','{{ translate("Change status to returned ?") }}')"
                                                       href="javascript:">{{translate('returned')}}</a>
                                                    <a class="dropdown-item"
                                                       onclick="route_alert('{{route('admin.orders.status',['id'=>$order['id'],'order_status'=>'failed'])}}','{{ translate("Change status to failed ?") }}')"
                                                       href="javascript:">{{translate('failed')}}</a>
                                                @endif

                                                @if($order['order_type'] == 'dine_in')
                                                    <a class="dropdown-item"
                                                       onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                       href="javascript:">{{translate('cooking')}}</a>
                                                    <a class="dropdown-item"
                                                       onclick="offline_payment_order_alert('{{ translate("You can not change order status to this status. Please Check & Verify the payment information whether it is correct or not. You can only change order status to failed or cancel if payment is not verified.") }}')"
                                                       href="javascript:">{{translate('completed')}}</a>
                                                @endif
                                                @if (auth('admin')->user()->isAdminOrManager())
                                                    <a class="dropdown-item"
                                                       onclick="route_alert('{{route('admin.orders.status',['id'=>$order['id'],'order_status'=>'canceled'])}}','{{ translate("Change status to canceled ?") }}')"
                                                       href="javascript:">{{translate('canceled')}}
                                                    </a>
                                                @endif
                                            @else
                                                @if($order['order_type'] == 'dine_in')
                                                    @foreach(App\Model\Order::DINE_IN_STATUSES as $key => $status)
                                                        @if (auth('admin')->user()->isAdminOrManager() || $key != 'canceled')
                                                            <a class="dropdown-item"
                                                               onclick="route_alert('{{ route('admin.orders.status', ['id' => $order['id'], 'order_status' => $key]) }}','{{ translate("Are you want to change the status?") }}')"
                                                               href="javascript:">{{ $status }}
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                @if($order['order_type'] == 'take_away')
                                                    @foreach(App\Model\Order::TAKE_OUT_STATUSES as $key => $status)
                                                        @if (auth('admin')->user()->isAdminOrManager() || $key != 'canceled')
                                                            <a class="dropdown-item"
                                                               onclick="route_alert('{{ route('admin.orders.status', ['id' => $order['id'], 'order_status' => $key]) }}','{{ translate("Are you want to change the status?") }}')"
                                                               href="javascript:">{{ $status }}
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                @endif
                                                @if($order['order_type'] == 'delivery')
                                                    @foreach(App\Model\Order::HOME_DELIVERY_STATUSES as $key => $status)
                                                        @if (auth('admin')->user()->isAdminOrManager() || $key != 'canceled')
                                                            <a class="dropdown-item"
                                                               onclick="route_alert('{{ route('admin.orders.status', ['id' => $order['id'], 'order_status' => $key]) }}','{{ translate("Are you want to change the status?") }}')"
                                                               href="javascript:">{{ $status }}
                                                            </a>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="d-flex justify-content-between align-items-center gap-10 form-control">
                                        <span class="title-color">{{ translate('Payment Status') }}</span>
                                        @if($order['payment_method'] == 'offline_payment' && $order->offline_payment?->status != 1)
                                            <label class="switcher payment-status-text">
                                                <input class="switcher_input" type="checkbox" name="payment_status" value="1" id="payment_status_switch"
                                                       onclick="offline_payment_status_alert('{{ translate("You can not change status of unverified offline payment") }}')"
                                                    {{ $order->payment_status == 'paid' ? 'checked' : '' }}>
                                                <span class="switcher_control"></span>
                                            </label>
                                        @else
                                            <label class="switcher payment-status-text">
                                                <input class="switcher_input" {{ $order->payment_status == 'paid' ? 'disabled' : '' }} type="checkbox" name="payment_status" value="1"
                                                       onclick="location.href='{{route('admin.orders.payment-status',['id'=>$order['id'],'payment_status' =>$order->payment_status == 'paid' ?'unpaid':'paid'])}}'"
                                                       {{ $order->payment_status == 'paid' ?'checked':''}} @if($order->payment_status == 'paid' && !auth('admin')->user()->isAdminOrManager()) disabled @endif>
                                                <span class="switcher_control"></span>
                                            </label>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            @if(in_array($order->order_type, ['home_delivery']) && ($order->customer || $order->is_guest == 1))
                                <div class="">
                                    {{--need change option--}}
                                    <label class="font-weight-bold text-dark fz-14">{{translate('Delivery_Date_&_Time')}} {{$order['delivery_date'] > \Carbon\Carbon::now()->format('Y-m-d')? translate('(Scheduled)') : ''}}</label>
                                    <div class="d-flex gap-2 flex-wrap flex-xxl-nowrap">
                                        <input onchange="changeDeliveryTimeDate(this)" name="delivery_date" type="date" class="form-control" value="{{$order['delivery_date'] ?? ''}}">
                                        <input onchange="changeDeliveryTimeDate(this)" name="delivery_time" type="time" class="form-control" value="{{$order['delivery_time'] ?? ''}}">
                                    </div>
                                </div>
                                @if($order['order_type']!='take_away' && $order['order_type'] != 'pos' && $order['order_type'] != 'dine_in' && !$order['delivery_man_id'])

                                    <a href="#" class="btn btn-primary btn-block d-flex gap-1 justify-content-center align-items-center" data-toggle="modal" data-target="#assignDeliveryMan">
                                        <img width="17" src="{{asset('assets/admin/img/icons/assain_delivery_man.png')}}" alt="">
                                        {{translate('Assign_Delivery_Man')}}
                                    </a>
                                @endif
                            @endif
                            {{-- counter --}}
                            <div class="">
                                @if(in_array($order->order_type, ['dine_in']) && (in_array($order->order_status, ['cooking'])))
                                    <label class="font-weight-bold text-dark fz-18">{{translate('Food_Preparation_Time')}}</label>
                                    <div class="form-control justify-content-between">
                                        <span class="">
                                        <i class="tio-timer d-none" id="timer-icon"></i>
                                        <span id="counter" class="text-info"></span>
                                        <i class="tio-edit p-1 d-none" id="edit-icon" style="cursor: pointer;" data-toggle="modal" data-target="#counter-change" data-whatever="@mdo"></i>
                                        </span>
                                    </div>
                                @endif
                            </div>


                            @if($order->delivery_man_id)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h4 class="mb-4 d-flex gap-2">
                                    <span class="card-header-icon">
                                        <i class="tio-user text-dark"></i>
                                    </span>
                                            <span>{{ translate('delivery_man') }}</span>
                                            <a  href="#"  data-toggle="modal" data-target="#assignDeliveryMan"
                                                class="text--base cursor-pointer ml-auto">
                                                {{translate('Change')}}
                                            </a>
                                        </h4>
                                        <div class="media flex-wrap gap-3">
                                            <a>
                                                <img class="avatar avatar-lg rounded-circle" src="{{asset('storage/app/public/delivery-man/'.$order->delivery_man->image)}}" onerror="this.src='{{asset('assets/admin/img/160x160/img1.jpg')}}'" alt="Image">
                                            </a>
                                            <div class="media-body d-flex flex-column gap-1">
                                                <a target="" href="#" class="text-dark"><span>{{$order->delivery_man['f_name'].' '.$order->delivery_man['l_name'] ?? ''}}</span></a>
                                                <span class="text-dark"> <span>{{$order->delivery_man['orders_count']}}</span> {{translate('Orders')}}</span>
                                                <span class="text-dark break-all">
                                            <i class="tio-call-talking-quiet mr-2"></i>
                                            <a href="tel:{{$order->delivery_man['phone']}}" class="text-dark">{{$order->delivery_man['phone'] ?? ''}}</a>
                                        </span>
                                                <span class="text-dark break-all">
                                            <i class="tio-email mr-2"></i>
                                            <a href="mailto:{{$order->delivery_man['email']}}" class="text-dark">{{$order->delivery_man['email'] ?? ''}}</a>
                                        </span>
                                            </div>
                                        </div>
                                        <hr class="w-100">
                                        @if($order['order_status']=='out_for_delivery')
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5>{{translate('Last_location')}}</h5>
                                            </div>
                                            @php($origin=\App\Model\DeliveryHistory::where(['deliveryman_id'=>$order['delivery_man_id'],'order_id'=>$order['id']])->first())
                                            @php($current=\App\Model\DeliveryHistory::where(['deliveryman_id'=>$order['delivery_man_id'],'order_id'=>$order['id']])->latest()->first())
                                            @if(isset($origin))
                                                <a target="_blank" class="text-dark"
                                                   title="Delivery Boy Last Location" data-toggle="tooltip" data-placement="top"
                                                   href="http://maps.google.com/maps?z=12&t=m&q=loc:{{$current['latitude']}}+{{$current['longitude']}}">
                                                    <img width="13" src="{{asset('assets/admin/img/icons/location.png')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$current['location']?? ''}}
                                                </a>
                                            @else
                                                <a href="javascript:" data-toggle="tooltip" class="text-dark"
                                                   data-placement="top" title="{{translate('Waiting for location...')}}">
                                                    <img width="13" src="{{asset('assets/admin/img/icons/location.png')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{translate('Waiting for location...')}}
                                                </a>
                                            @endif
                                        @else
                                            <a href="javascript:" onclick="last_location_view()" class="text-dark"
                                               data-toggle="tooltip" data-placement="top"
                                               title="{{translate('Only available when order is out for delivery!')}}">
                                                <img width="13" src="{{asset('assets/admin/img/icons/location.png')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{translate('Only available when order is out for delivery!')}}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            @if($order['order_type']!='take_away' && $order['order_type'] != 'pos' && $order['order_type'] != 'dine_in')
                                <div class="card">
                                    <div class="card-body">
                                        {{--<div class="d-flex justify-content-between gap-3 border-top mt-3 pt-3">--}}
                                        <div class="mb-4 d-flex gap-2 justify-content-between">
                                            <h4 class="mb-0 d-flex gap-2">
                                                <i class="tio-user text-dark"></i>
                                                {{translate('Delivery_Informatrion')}}
                                            </h4>

                                            <div class="edit-btn cursor-pointer" data-toggle="modal" data-target="#deliveryInfoModal">
                                                {{-- <img width="24" src="{{asset('assets/admin/img/icons/edit.png')}}" alt=""> --}}
                                                <i class="tio-edit"></i>
                                            </div>
                                        </div>
                                        <div class="delivery--information-single flex-column">
                                            @php($address=\App\Model\CustomerAddress::find($order['delivery_address_id']))
                                            {{--                                @dump($address)--}}
                                            <div class="d-flex">
                                                <div class="name">{{ translate('Name') }}</div>
                                                <div class="info">{{ $address? $address['contact_person_name']: '' }}</div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="name">{{translate('Contact')}}</div>
                                                <a href="tel:{{ $address? $address['contact_person_number']: '' }}" class="info">{{ $address? $address['contact_person_number']: '' }}</a>
                                            </div>
                                            <div class="d-flex">
                                                <div class="name">{{translate('floor')}}</div>
                                                <div class="info">{{$address['floor'] ?? ''}}</div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="name">{{translate('house')}}</div>
                                                <div class="info">{{$address['house'] ?? ''}}</div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="name">{{translate('road')}}</div>
                                                <div class="info">{{$address['road'] ?? ''}}</div>
                                            </div>
                                            <hr class="w-100">
                                            <div class="d-flex align-items-center gap-3">
                                                @if(isset($address['address']) && isset($address['latitude']) && isset($address['longitude']))
                                                    <a target="_blank" class="text-dark"
                                                       href="http://maps.google.com/maps?z=12&t=m&q=loc:{{$address['latitude']}}+{{$address['longitude']}}">
                                                        <img width="13" src="{{asset('assets/admin/img/icons/location.png')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        {{$address['address']}}
                                                    </a>
                                                @else
                                                    <a target="_blank" class="text-dark"
                                                       href="#">
                                                        <img width="13" src="{{asset('assets/admin/img/icons/location.png')}}" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        {{translate('no_location_found')}}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                @endif

                @if($order->offline_payment)
                    @php($payment = json_decode($order->offline_payment?->payment_info, true))

                    <div class="card mt-2">
                        <div class="card-body">
                            <h5 class="form-label mb-3">
                                <span class="card-header-icon"><i class="tio-shopping-basket"></i></span>
                                <span>{{translate('Offline payment information')}}</span>
                            </h5>
                            <div class="offline-payment--information-single flex-column mt-3">
                                <div class="d-flex">
                                    <span class="name">{{ translate('payment_note') }}</span>
                                    <span class="info">{{ $payment['payment_note'] }}</span>
                                </div>
                                @foreach($payment['method_information'] as $infos)
                                    @foreach($infos as $info_key => $info)
                                        <div class="d-flex">
                                            <span class="name">{{ $info_key }}</span>
                                            <span class="info">{{ $info }}</span>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif


                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="d-flex gap-2">
                            {{ \App\CentralLogics\translate('Customer') }}: {{ $order->is_guest == 1 ? 'Guest Customer' : ($order->getCustomerName() ?? 'Walk-in Customer') }}
                        </h4>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <h4 class="d-flex gap-2">Payment Method: {{ $order->getPaymentMethod() }}</h4>
                        @if (in_array($order->payment_method, ['pay_after_eating', 'pay_later', 'cash_on_delivery', 'card_on_delivery']) && !$order->isOrderCompleted())
                            <ul class="list-unstyled option-buttons">
                                <li class="cash_payment_li">
                                    <input type="radio" class="payment-type-input" id="visa-cc" value="Visa" name="payment_method" hidden="">
                                    <label for="visa-cc" class="btn btn-bordered px-2 mb-0">{{ translate('Visa') }}</label>
                                </li>
                                <li class="cash_payment_li">
                                    <input type="radio" class="payment-type-input" id="mastercard-cc" value="Mastercard" name="payment_method" hidden="">
                                    <label for="mastercard-cc" class="btn btn-bordered px-2 mb-0">{{ translate('Mastercard') }}</label>
                                </li>
                                <li class="card_payment_li">
                                    <input type="radio" class="payment-type-input" value="Amex" id="amex-cc" name="payment_method" hidden="">
                                    <label for="amex-cc" class="btn btn-bordered px-2 mb-0">{{ translate('Amex') }}</label>
                                </li>
                                <li class="card_payment_li">
                                    <input type="radio" class="payment-type-input" value="Debit_Card" id="Debit" name="payment_method" hidden="">
                                    <label for="Debit" class="btn btn-bordered px-2 mb-0">{{ translate('Debit Card') }}</label>
                                </li>
                                <li class="card_payment_li">
                                    <input type="radio" class="payment-type-input" value="Cash" id="Cash" name="payment_method" hidden="">
                                    <label for="Cash" class="btn btn-bordered px-2 mb-0">{{ translate('Cash') }}</label>
                                </li>
                                <li class="card_payment_li">
                                    <input type="radio" class="payment-type-input" value="Other CC" id="other-cc" name="payment_method" hidden="">
                                    <label for="other-cc" class="btn btn-bordered px-2 mb-0">{{ translate('Others') }}</label>
                                </li>
                                <li class="card_payment_li">
                                    <input type="radio" class="payment-type-input" value="Other CC" id="other-cc" name="payment_method" hidden="">
                                    <label for="other-cc" class="btn btn-bordered px-2 mb-0">{{ translate('Others') }}</label>
                                </li>
                                <li class="card_payment_li">
                                    <input type="radio" class="payment-type-input" value="Cash & Card" id="cash_and_card" name="payment_method" hidden="">
                                    <label for="cash_and_card" class="btn btn-bordered px-2 mb-0">Cash & Card</label>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- End Row -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="assignDeliveryMan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5" id="assignDeliveryManLabel">{{translate('Assign_Delivery_Man')}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        @foreach($delivery_man as $deliveryMan)
                            <li class="list-group-item d-flex flex-wrap align-items-center gap-3 justify-content-between">
                                <div class="media align-items-center gap-2 flex-wrap">
                                    <div class="avatar">
                                        <img class="img-fit rounded-circle" loading="lazy" decoding="async"
                                             onerror="this.src='{{asset('assets/admin/img/160x160/img1.jpg')}}'"
                                             src="{{asset('/storage/app/public/delivery-man/'.$deliveryMan->image)}}" alt="Jhon Doe">
                                    </div>
                                    <span>{{$deliveryMan['f_name'].' '.$deliveryMan['l_name']}}</span>
                                </div>
                                <a id="{{$deliveryMan->id}}" onclick="addDeliveryMan(this.id)" class="btn btn-primary btn-sm">{{translate('Assign')}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <!-- Modal -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4"
                        id="mySmallModalLabel">{{translate('reference')}} {{translate('code')}} {{translate('add')}}</h5>
                    <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal"
                            aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>

                <form action="{{route('admin.orders.add-payment-ref-code',[$order['id']])}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <!-- Input Group -->
                        <div class="form-group">
                            <input type="text" name="transaction_reference" class="form-control"
                                   placeholder="{{translate('EX : Code123')}}" required>
                        </div>
                        <!-- End Input Group -->
                        <button class="btn btn-primary">{{translate('submit')}}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deliveryInfoModal" id="deliveryInfoModal"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="mySmallModalLabel">{{translate('Update_Delivery_Informatrion')}}</h5>
                    <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
                @if($order['delivery_address_id'])
                    <form action="{{route('admin.orders.update-shipping',[$order['delivery_address_id']])}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$order->user_id}}">
                        <input type="hidden" name="order_id" value="{{$order->id}}">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{translate('Type')}}</label>
                                        <input type="text" name="address_type" class="form-control"
                                               placeholder="{{translate('EX : Home')}}" value="{{ $address['address_type'] ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-label" for="">{{ translate('contact_person_name') }}
                                            <span class="input-label-secondary text-danger">*</span></label>
                                        <input type="text" class="form-control" name="contact_person_name"
                                               placeholder="{{translate('EX : Jhon Doe')}}" value="{{ $address['contact_person_name'] ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-label" for="">{{ translate('Contact Number') }}
                                            <span class="input-label-secondary text-danger">*</span></label>
                                        <input type="text" class="form-control" name="contact_person_number"
                                               placeholder="{{translate('EX : 01888888888')}}" value="{{ $address['contact_person_number']?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{translate('floor')}}</label>
                                        <input type="text" class="form-control" name="floor"
                                               placeholder="{{translate('EX : 5')}}" value="{{ $address['floor'] ?? '' }}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{translate('house')}}</label>
                                        <input type="text" class="form-control" name="house"
                                               placeholder="{{translate('EX : 21/B')}}" value="{{ $address['house'] ?? '' }}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{translate('road')}}</label>
                                        <input type="text" class="form-control" name="road"
                                               placeholder="{{translate('EX : Baker Street')}}" value="{{ $address['road'] ?? '' }}" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-label" for="">{{ translate('latitude') }}<span
                                                class="input-label-secondary text-danger">*</span></label>
                                        <input type="text" class="form-control" name="latitude"
                                               placeholder="{{translate('EX : 23.796584198263794')}}" value="{{ $address['latitude'] ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-label" for="">{{ translate('longitude') }}<span
                                                class="input-label-secondary text-danger">*</span></label>
                                        <input type="text" class="form-control" name="longitude"
                                               placeholder="{{translate('EX : 23.796584198263794')}}" value="{{ $address['longitude'] ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{translate('Address')}}</label>
                                        <textarea class="form-control" name="address" cols="30" rows="3" placeholder="{{translate('EX : Dhaka,_Bangladesh')}}" required>{{ $address['address'] ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary">{{translate('submit')}}</button>
                            </div>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Modal -->
    @if($order['order_type'] != 'pos' && $order['order_type'] != 'take_away' && ($order['order_status'] != DELIVERED && $order['order_status'] != RETURNED && $order['order_status'] != CANCELED && $order['order_status'] != FAILED && $order['order_status'] != COMPLETED))
        <div class="modal fade" id="counter-change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px">{{ translate('Need time to prepare the food') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('admin.orders.increase-preparation-time', ['id' => $order->id])}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group text-center">
                                <input type="number" min="0" name="extra_minute" id="extra_minute" class="form-control" placeholder="{{translate('EX : 20')}}" required>
                            </div>

                            <div class="form-group flex-between">
                                <div class="badge text-info shadow" onclick="predefined_time_input(10)" style="cursor: pointer">{{ translate('10min') }}</div>
                                <div class="badge text-info shadow" onclick="predefined_time_input(20)" style="cursor: pointer">{{ translate('20min') }}</div>
                                <div class="badge text-info shadow" onclick="predefined_time_input(30)" style="cursor: pointer">{{ translate('30min') }}</div>
                                <div class="badge text-info shadow" onclick="predefined_time_input(40)" style="cursor: pointer">{{ translate('40min') }}</div>
                                <div class="badge text-info shadow" onclick="predefined_time_input(50)" style="cursor: pointer">{{ translate('50min') }}</div>
                                <div class="badge text-info shadow" onclick="predefined_time_input(60)" style="cursor: pointer">{{ translate('60min') }}</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ translate('Close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ translate('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    @if($order->offline_payment)
        <div class="modal fade" id="payment_verify_modal">
            <div class="modal-dialog modal-lg offline-details">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <h4 class="modal-title pb-2">{{translate('Payment_Verification')}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="card">
                        <div class="modal-body mx-2">
                            <p class="text-danger">{{translate('Please Check & Verify the payment information whether it is correct or not before confirm the order.')}}</p>
                            <h5>{{translate('customer_Information')}}</h5>

                            <div class="card-body">
                                @if($order->is_guest == 0)
                                    <p>{{ translate('name') }} : {{ $order->getCustomerName()}} </p>
                                    <p>{{ translate('contact') }} : {{ $order->customer ? $order->customer->phone: ''}}</p>
                                @else
                                    <p>{{ translate('guest_customer') }} </p>
                                @endif
                            </div>

                            <h5>{{translate('Payment_Information')}}</h5>
                            @php($payment = json_decode($order->offline_payment?->payment_info, true))
                            <div class="row card-body">
                                <div class="col-md-6">
                                    <p>{{ translate('Payment_Method') }} : {{ $payment['payment_name'] }}</p>
                                    @foreach($payment['method_fields'] as $fields)
                                        @foreach($fields as $field_key => $field)
                                            <p>{{ $field_key }} : {{ $field }}</p>
                                        @endforeach
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <p>{{ translate('payment_note') }} : {{ $payment['payment_note'] }}</p>
                                    @foreach($payment['method_information'] as $infos)
                                        @foreach($infos as $info_key => $info)
                                            <p>{{ $info_key }} : {{ $info }}</p>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn--container justify-content-end my-2 mx-3">
                        @if($order->offline_payment?->status == 0)
                            <a type="reset" class="btn btn-secondary" onclick="verify_offline_payment(2)">{{ translate('Payment_Did_Not_Received') }}</a>
                        @endif
                        <a type="submit" class="btn btn-primary" onclick="verify_offline_payment(1)">{{ translate('Yes,_Payment_Received') }}</a>
                    </div>
                </div>
            </div>
        </div>

    @endif

    @php($products = \App\Model\Product::where(['status'=>1])->get())
    <div class="modal fade" id="addMoreItemModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="addMoreItemModalContent">
                <div class="modal-header justify-content-center p-4">
                    <div class="col-6">
                        <div class="dropdown show">
                            <div class="input-group">
                                <select name="search_product" id="searchProduct">
                                    <option value="" selected disabled>Select Item</option>
                                    @if ($products->count())
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">
                                                <span>{{ $product->name }}</span>
                                                <span> - {{ $product->getProductTypeName() }}</span>
                                                <span> - {{ App\CentralLogics\Helpers::set_symbol($product->price) }}</span>
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body mx-2">
                    <div class="row">
                        <div class="col-12 add-addon-product-section">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addAuthoziationModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addAuthCodeForm" action="{{ route('admin.orders.paymentStatusAuthCode', [$order->id]) }}" method="post">
                        @csrf
                        <input type="hidden" id="paymentMethodField" name="payment_method" value="">
                        <div class="d-flex row mb-4">
                            <div class="form-group col-sm-8">
                                <input type="float" step="any" class="form-control tip-input" name="t_total" id="t_total" placeholder="Add Paid Amount" required>
                                <!--<input type="number" step="any" class="form-control tip-input" name="tip_amount" id="tip_amount" placeholder="Add Tip (Optional)">-->
                            </div>
                            <div class="form-group col-sm-3 auth-code-btn ">
                                <button class="btn btn-primary add-auth-code" type="button">{{ translate('submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cash_p" id="refund-cash-model" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ translate('Payment Details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.orders.storeCashAmount', [$order->id]) }}" method="post">
                        @csrf
                        <div class="row pl-2">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Total Amount') }} </label>
                                    <input type="number" step="any" id="cash-total-amount" name="total_amount" class="form-control" value="{{ $order->totalOrderAmount() ?? 0 }}" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Paid Amount') }} </label>
                                    <input type="number" step="any" id="cash-paid-amount" name="paid_amount" class="form-control" value="" placeholder="Paid Amount">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Change') }} </label>
                                    <input type="number" step="any" id="cash-change-amount" name="change_amount" class="form-control" value="" placeholder="Change" required="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Tip Amount') }} </label>
                                    <input type="number" step="any" id="cash-tip-amount" name="tip_amount" class="form-control" value="" placeholder="Tip amount">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary non-printable"  id="submitCashForm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cash_p" id="editTipAmount" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tip Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.orders.updateTipAmount', [$order->id]) }}" method="post" id="updateTipAmountForm">
                        @csrf
                        <div class="row pl-2">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label class="input-label">Tip Amount</label>
                                    <input type="number" step="any" name="tip_amount" class="form-control" value="{{ ($order->tip_amount - $order->cash_tip) ?? 0 }}" placeholder="">
                                </div>
                            </div>
                            @if ($order->payment_method == 'Cash & Card')
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label class="input-label">Cash Tip Amount</label>
                                        <input type="number" step="any" name="cash_tip" class="form-control" value="{{ $order->cash_tip ?? 0 }}" placeholder="">
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary non-printable"  id="submitCashForm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cash_p" id="payCashAndCardModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ translate('Payment Details') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.orders.storeCashAndCardAmount', [$order->id]) }}" method="post" id="payByCashAndCardForm">
                        @csrf
                        <div class="row pl-2">
                            <div class="col-12 col-lg-4 px-2">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Total Amount') }} </label>
                                    <input type="number" step="any" id="cash-total-amount" name="total_amount" class="form-control" value="{{ $order->totalOrderAmount() ? number_format($order->totalOrderAmount(), 2) : 0 }}" placeholder="" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-2">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Paid Cash Amount') }} </label>
                                    <input type="number" step="any" id="cash-paid-amount" name="paid_amount" class="form-control" value="" max="{{ $order->totalOrderAmount() }}" placeholder="Paid Amount" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-2">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Cash Tip Amount') }} </label>
                                    <input type="number" step="any" id="cash--tip-amount" name="cash_tip" class="form-control" value="" placeholder="Cash Tip">
                                </div>
                            </div>
                        </div>
                        <div class="row pl-2">
                            <div class="col-12 col-lg-4 px-2">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Card Tip Amount') }} </label>
                                    <input type="number" step="any" id="cash-tip-amount" name="tip_amount" class="form-control" value="" placeholder="Card Tip">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-2">
                                <div class="form-group">
                                    <label class="input-label"> Pay By Card Amount </label>
                                    <input type="number" step="any" id="pay-by-card" name="pay_by_card" class="form-control" value="" placeholder="Pay by card" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 px-2">
                                <div class="form-group">
                                    <label class="input-label"> {{ translate('Select Card') }} </label>
                                    <select name="payment_method" id="payment_method" class="form-control" required>
                                        <option value="" disabled selected>Select Card</option>
                                        @foreach(App\Model\Order::PAYMENT_METHODS as $key => $val)
                                            @if ($key != 'Cash')
                                                <option value="{{ $key }}">{{ $val }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary non-printable"  id="submitCashForm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- End Modal -->
    {{-- void modal  --}}
    <div class="modal fade" id="quick-view" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="quick-view-modal">

            </div>
        </div>
    </div>

    {{-- refund --}}
    <div class="modal fade" id="quick-view-refund" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="quick-view-modal-refund">

            </div>
        </div>
    </div>
    @include('admin-views/includes/invoice-modal')
    @include('admin-views/includes/discount-modal')
    @include('admin-views/includes/item-discount-modal')
    @include('admin-views/includes/server-modal')
@endsection


@push('script_2')
    <script src="{{asset('assets/admin/js/invoice-print.js')}}"></script>
    <script src="{{asset('assets/admin/js/common.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        var batchStatus = "{{$batchStatus}}";
        var authCodeStatus = "{{ session()->has('auth_code') }}";

        $(document).ready(function () {

            togglePrintSelectedItemBtn();

            $('body').on('keyup', '#cash-paid-amount', function () {
                var totalCashAmount = parseFloat($('#cash-total-amount').val());
                var paidCashAmount = parseFloat($('#cash-paid-amount').val());
                var changeCashAmount = paidCashAmount - totalCashAmount;

                $('#cash-change-amount').val(parseFloat(changeCashAmount).toFixed(2));
            });

            $('body').on('click', '.products_details_ids', function(){
                togglePrintSelectedItemBtn();
            });

            $('body').on('click', '.order_products', function(){
                updateRefundAmount();
                updateVoidAmount();
            });

            $('.js-select2-custom').select2();
            $('#searchProduct').select2();

            if (authCodeStatus) {
                $('#addAuthoziationModal').modal('show');
            }

            $('body').on('click', '.payment-type-input', function() {
                var payment_method = $(this).val();
                $('#paymentMethodField').val(payment_method);
                if (payment_method == 'Cash') {
                    $('#refund-cash-model').modal('show');
                } else if (payment_method == 'Cash & Card') {
                    $('#payCashAndCardModal').modal('show');
                } else {
                    $('#addAuthoziationModal').modal('show');
                }
            });

            $('body').on('click', '.cart-quantity-btn', function() {
                var button = $(this);
                var input = button.siblings('input.qty');
                var currentValue = parseInt(input.val());
                var id = button.attr('data-key');

                if (button.val() === '+') {
                    input.val(currentValue + 1);
                } else if (button.val() === '-' && currentValue > 1) {
                    input.val(currentValue - 1);
                }

                $.ajax({
                    url: "{{ route('admin.pos.updateOrderItemQuantity') }}",
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id,
                        quantity: input.val(),
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $('#loading').show();
                    },
                    success: function(data) {
                        location.reload();
                    },
                    complete: function() {
                        $('#loading').hide();
                    },
                });
            });

            $('body').on('click', '.submit-void-form', function() {

                if(batchStatus == 'close') {
                    Swal.fire({
                        title: '',
                        text: '{{translate("Batch Closed, Process Refund.")}}',
                        type: 'warning',
                    });

                    return false;
                }
                var orderId = $(this).attr('data-id');

                $.ajax({
                    url: '{{route('admin.pos.quick-view-void')}}',
                    type: 'GET',
                    data: {
                        order_id: orderId
                    },
                    dataType: 'json', // added data type
                    beforeSend: function () {
                        // $('#loading').show();
                    },
                    success: function (data) {

                        $('#quick-view').modal('show');
                        $('#quick-view-modal').empty().html(data.view);

                        setTimeout(() => {
                            updateVoidAmount();
                        }, 100);
                    },
                    complete: function () {
                        // $('#loading').hide();
                    },
                });
            });

            $('body').on('click', '.add-auth-code', function() {
                $('form#addAuthCodeForm').submit();
            });

            $('body').on('change', '#searchProduct', function() {
                var productId = $(this).val();
                var orderId = '{{ $order->id }}';

                $.ajax({
                    url: '{{ route('admin.pos.getAddOnProduct') }}',
                    type: 'GET',
                    data: {
                        product_id: productId,
                        order_id: orderId
                    },
                    dataType: 'json',
                    beforeSend: function() {
                    },
                    success: function(data) {
                        $('.add-addon-product-section').empty().html(data.view);
                    },
                    complete: function() {
                    },
                });
            });

            $('#updateItemDiscountModal').on('show.bs.modal', function (event) {
                const checkboxes = document.querySelectorAll('.products_details_ids');
                const discountForm = document.getElementById('updateOrderItemDiscountForm');

                checkboxes.forEach(checkbox => {
                    const selectedValue = checkbox.value;
                    const existingInput = discountForm.querySelector(`input[value="${selectedValue}"]`);
                    if (checkbox.checked) {
                        if (!existingInput) {
                            const hiddenInput = createHiddenInput(selectedValue);
                            discountForm.appendChild(hiddenInput);
                        }
                    } else {
                        if (existingInput) {
                            existingInput.remove();
                        }
                    }
                });
            });

            function createHiddenInput(value) {
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'selected_products_details_ids[]';
                input.value = value;
                return input;
            }


            $('.increment-btn').click(function (e) {

                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value<10){
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }

            });

            $('.decrement-btn').click(function (e) {
                e.preventDefault();
                var decre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value>1){
                    value--;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

        });

    </script>




    <script>
        function route_alert(route, message) {
            Swal.fire({
                title: '{{translate("Are you sure?")}}',
                text: message,
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: 'default',
                confirmButtonColor: '#fd571b',
                cancelButtonText: '{{translate("No")}}',
                confirmButtonText:'{{translate("Yes")}}',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    location.href = route;
                }
            })
        }

        function addDeliveryMan(id) {
            $.ajax({
                type: "GET",
                url: '{{url('/')}}/admin/orders/add-delivery-man/{{$order['id']}}/' + id,
                data: $('#product_form').serialize(),
                success: function (data) {
                    if(data.status == true) {
                        toastr.success('{{\App\CentralLogics\translate("Delivery man successfully assigned/changed")}}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                        setTimeout(function () {
                            location.reload();
                        }, 2000)
                    }else{
                        toastr.error('{{\App\CentralLogics\translate("Deliveryman man can not assign/change in that status")}}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }
                },
                error: function () {
                    toastr.error('{{\App\CentralLogics\translate("Add valid data")}}', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                }
            });
        }

        function last_location_view() {
            toastr.warning('{{\App\CentralLogics\translate("Only available when order is out for delivery!")}}', {
                CloseButton: true,
                ProgressBar: true
            });
        }
    </script>

    <script>
        function predefined_time_input(min) {
            document.getElementById("extra_minute").value = min;
        }
    </script>
    @if($order['order_type'] != 'pos' && $order['order_type'] != 'take_away' && ($order['order_status'] != DELIVERED && $order['order_status'] != RETURNED && $order['order_status'] != CANCELED && $order['order_status'] != FAILED && $order['order_status'] != COMPLETED))
        <script>
            const expire_time = "{{ $order['remaining_time'] }}";
            var countDownDate = new Date(expire_time).getTime();
            const time_zone = "{{ \App\CentralLogics\Helpers::get_business_settings('time_zone') ?? 'UTC' }}";

            if ($('#timer-icon').length) {
                var x = setInterval(function() {
                    var now = new Date(new Date().toLocaleString("en-US", {timeZone: time_zone})).getTime();

                    var distance = countDownDate - now;

                    var days = Math.trunc(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.trunc((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.trunc((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.trunc((distance % (1000 * 60)) / 1000);

                    document.getElementById("timer-icon").classList.remove("d-none");
                    document.getElementById("edit-icon").classList.remove("d-none");
                    $text =''; //(distance < 0) ? "{{ translate('over') }}" : "{{ translate('left') }}";
                    document.getElementById("counter").innerHTML = Math.abs(days) + "d " + Math.abs(hours) + "h " + Math.abs(minutes) + "m " + Math.abs(seconds) + "s " + $text;
                    if (distance < 0) {
                        var element = document.getElementById('counter');
                        element.classList.add('text-danger');
                    }
                }, 1000);
            }

        </script>
    @endif

    <script>
        function changeDeliveryTimeDate(t) {
            let name = t.name
            let value = t.value
            $.ajax({
                type: "GET",
                url: '{{url('/')}}/admin/orders/ajax-change-delivery-time-date/{{$order['id']}}?' + t.name + '=' + t.value,
                data: {
                    name : name,
                    value : value
                },
                success: function (data) {
                    console.log(data)
                    if(data.status == true && name == 'delivery_date') {
                        toastr.success('{{\App\CentralLogics\translate("Delivery date changed successfully")}}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }else if(data.status == true && name == 'delivery_time'){
                        toastr.success('{{\App\CentralLogics\translate("Delivery time changed successfully")}}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }else {
                        toastr.error('{{\App\CentralLogics\translate("Order No is not valid")}}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }
                    location.reload();
                },
                error: function () {
                    toastr.error('{{\App\CentralLogics\translate("Add valid data")}}', {
                        CloseButton: true,
                        ProgressBar: true
                    });
                },
            });
        }

        function verify_offline_payment(status) {
            $.ajax({
                type: "GET",
                url: '{{url('/')}}/admin/orders/verify-offline-payment/{{$order['id']}}/' + status,
                success: function (data) {
                    //console.log(data);
                    location.reload();
                    if(data.status == true) {
                        toastr.success('{{ translate("offline payment verify status changed") }}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }else{
                        toastr.error('{{ translate("offline payment verify status not changed") }}', {
                            CloseButton: true,
                            ProgressBar: true
                        });
                    }

                },
                error: function () {
                    // toastr.error('Add valid data', {
                    //     CloseButton: true,
                    //     ProgressBar: true
                    // });
                }
            });
        }

        function offline_payment_status_alert(message) {
            Swal.fire({
                title: '{{translate("Payment_is_Not_Verified")}}',
                text: message,
                type: 'question',
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonColor: 'default',
                confirmButtonColor: '#01684b',
                cancelButtonText: '{{translate("Close")}}',
                confirmButtonText: '',
                reverseButtons: true
            }).then((result) => {
                $('#payment_status_switch').prop('checked', false);
            })
        }

        function offline_payment_order_alert(message) {
            Swal.fire({
                title: '{{translate("Payment_is_Not_Verified")}}',
                text: message,
                type: 'question',
                showCancelButton: true,
                showConfirmButton: false,
                cancelButtonColor: 'default',
                confirmButtonColor: '#01684b',
                cancelButtonText: '{{translate("Close")}}',
                confirmButtonText: '{{translate("Proceed")}}',
                reverseButtons: true
            }).then((result) => {

            })
        }

    </script>
    <script type="text/javascript">
        function incrementValue()
        {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                document.getElementById('number').value = value;
            }
        }
        function decrementValue()
        {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                document.getElementById('number').value = value;
            }

        }
    </script>
    <script>
        function quickViewRefund(order_id) {

            if (batchStatus == 'open') {
                Swal.fire({
                    title: '',
                    text: '{{translate("Batch Open, Process Void.")}}',
                    type: 'warning',
                });
                return false;
            }

            $.ajax({
                url: '{{ route('admin.pos.refund_view') }}',
                type: 'GET',
                data: {
                    order_id: order_id
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#loading').show();
                },
                success: function(data) {
                    $('#quick-view-refund').modal('show');
                    $('#quick-view-modal-refund').empty().html(data.view);

                    setTimeout(() => {
                        updateRefundAmount();
                    }, 100);
                },
                complete: function() {
                    $('#loading').hide();
                },
            });

        }

        function updateRefundAmount() {
            var totalAmount = 0;
            var gstAmount = 0;
            var pstAmount = 0;
            var subTotal = 0;
            var liquorSubTotal = 0;
            var gratuityAmount = 0;
            var numberOfPeople = 0;

            if ($('.order_products:checked').length) {
                $('.submit-refund-btn').removeAttr('disabled');
            } else {
                $('.submit-refund-btn').attr('disabled', 'disabled');
            }

            $('.order_products').each(function() {
                if ($(this).prop('checked')) {
                    var amount = parseFloat($(this).attr('data-price'));
                    var isLiquor = parseFloat($(this).attr('data-isLiquor'));
                    subTotal = parseFloat(subTotal + amount);
                    if (parseInt(isLiquor)) {
                        liquorSubTotal = parseFloat(liquorSubTotal + amount);
                    }
                }
            });

            if ($('.gratuity-refund').length) {
                gratuityAmount = subTotal * 18 / 100;
            }

            gstAmount = (subTotal + parseFloat(gratuityAmount))  * 5 / 100;
            pstAmount = (liquorSubTotal * 10) / 100;
            totalAmount = parseFloat(parseFloat(subTotal) + parseFloat(gratuityAmount) + parseFloat(pstAmount) + parseFloat(gstAmount)).toFixed(2);

            $('.sub-total-refund').text(parseFloat(subTotal).toFixed(2));
            $('.gst-refund').text(parseFloat(gstAmount).toFixed(2));
            $('.total-refund').text(parseFloat(totalAmount).toFixed(2));
            $('.gratuity-refund').text(parseFloat(gratuityAmount).toFixed(2));
            $('.pst-refund').text(parseFloat(pstAmount).toFixed(2));

            if (pstAmount) {
                $('.pst-refund-row').removeClass('d-none');
            } else {
                $('.pst-refund-row').addClass('d-none');
            }
        }

        function updateVoidAmount() {
            var totalAmount = 0;
            var gstAmount = 0;
            var pstAmount = 0;
            var subTotal = 0;
            var liquorSubTotal = 0;
            var gratuityAmount = 0;
            var numberOfPeople = 0;

            if ($('.order_products:checked').length) {
                $('.submit-void-btn').removeAttr('disabled');
            } else {
                $('.submit-void-btn').attr('disabled', 'disabled');
            }

            $('.order_products').each(function() {
                if ($(this).prop('checked')) {
                    var amount = parseFloat($(this).attr('data-price'));
                    var isLiquor = parseFloat($(this).attr('data-isLiquor'));
                    subTotal = parseFloat(subTotal + amount);
                    if (parseInt(isLiquor)) {
                        liquorSubTotal = parseFloat(liquorSubTotal + amount);
                    }
                }
            });

            if ($('.gratuity-void').length) {
                gratuityAmount = subTotal * 18 / 100;
            }

            gstAmount = (subTotal + parseFloat(gratuityAmount) ) * 5 / 100;
            pstAmount = (liquorSubTotal * 10) / 100;
            totalAmount = parseFloat(parseFloat(subTotal) + parseFloat(gratuityAmount) + parseFloat(pstAmount) + parseFloat(gstAmount)).toFixed(2);

            $('.sub-total-void').text(parseFloat(subTotal).toFixed(2));
            $('.gst-void').text(parseFloat(gstAmount).toFixed(2));
            $('.total-void').text(parseFloat(totalAmount).toFixed(2));
            $('.gratuity-void').text(parseFloat(gratuityAmount).toFixed(2));
            $('.pst-void').text(parseFloat(pstAmount).toFixed(2));

            if (pstAmount) {
                $('.pst-void-row').removeClass('d-none');
            } else {
                $('.pst-void-row').addClass('d-none');
            }
        }
        document.getElementById('t_total').addEventListener('input', function (e) {
            var value = e.target.value;

            // Check if the value contains a decimal point
            if (value.includes('.')) {
                // Split the value into the whole part and the decimal part
                var parts = value.split('.');
                if (parts[1].length > 2) {
                    // Limit the decimal part to 2 digits
                    parts[1] = parts[1].substring(0, 2);
                    console.log('ok');
                }
                // Reconstruct the value with the limited decimal part
                e.target.value = parts[0] + '.' + parts[1];
            }
        });

    </script>
@endpush

