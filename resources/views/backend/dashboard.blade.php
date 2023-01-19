@extends('backend.layouts.app')

@section('content')

   <div class="row">
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>No. Of Candidates</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>No. Of Companies</p>
              </div>
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         <!--  <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->

        </div>
        

            <div class="row">
              <div class="col-12 col-lg-12 col-xl-8 d-flex">
                <div class="card radius-10 w-100">
                  <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                      <div class="col">
                        <h5 class="mb-0">Recent Orders</h5>
                      </div>
                      <div class="col">
                        <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                          <div class="dropdown">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:;">Action</a>
                              </li>
                              <li><a class="dropdown-item" href="javascript:;">Another action</a>
                              </li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                     </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table align-middle mb-0">
                        <thead class="table-light">
                          <tr>
                            <th>#ID</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Date</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>#89742</td>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                   <img src="https://via.placeholder.com/400X300" alt="">
                                </div>
                                <div class="product-info">
                                  <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                                </div>
                              </div>
                            </td>
                            <td>2</td>
                            <td>$214</td>
                            <td>Apr 8, 2021</td>
                            
                          </tr>
                          <tr>
                            <td>#68570</td>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                   <img src="https://via.placeholder.com/400X300" alt="">
                                </div>
                                <div class="product-info">
                                  <h6 class="product-name mb-1">Sports Time Watch</h6>
                                </div>
                              </div>
                            </td>
                            <td>1</td>
                            <td>$185</td>
                            <td>Apr 9, 2021</td>
                          
                            </td>
                          </tr>
                          <tr>
                            <td>#38567</td>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                   <img src="https://via.placeholder.com/400X300" alt="">
                                </div>
                                <div class="product-info">
                                  <h6 class="product-name mb-1">Women Red Heals</h6>
                                </div>
                              </div>
                            </td>
                            <td>3</td>
                            <td>$356</td>
                            <td>Apr 10, 2021</td>
                      
                          </tr>
                          <tr>
                            <td>#48572</td>
                            <td>
                              <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                   <img src="https://via.placeholder.com/400X300" alt="">
                                </div>
                                <div class="product-info">
                                  <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                </div>
                              </div>
                            </td>
                            <td>1</td>
                            <td>$149</td>
                            <td>Apr 11, 2021</td>
                          
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div><!--end row-->

@endsection
