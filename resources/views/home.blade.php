@extends('layouts.master')
@section('content')
			</div>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1">DASHBOARD</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Sales</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="card px-3 ps-4">
									<div class="row index1">
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row border-end bd-xs-e-0 p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-primary text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-shopping-bag tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9 py-0">
													<div class="pt-4 pb-3">
														<div class="d-flex">
															<h6 class="mb-2 tx-12">Today Orders</h6>
															<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.11%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">5,472</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row border-end bd-md-e-0 bd-xs-e-0 bd-lg-e-0 bd-xl-e-0  p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-warning text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-dollar-sign tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9">
													<div class="pt-4 pb-3">
														<div class="d-flex">
															<h6 class="mb-2 tx-12">Today Earnings</h6>
															<span class="badge bg-danger-transparent text-danger font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.23%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">$47,589</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row border-end bd-xs-e-0  p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-secondary text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-external-link tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9">
													<div class="pt-4 pb-3">
														<div class="d-flex">
															<h6 class="mb-2 tx-12">Profit Gain</h6>
															<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>1.57%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">$8,943</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xxl-3">
											<div class="row  p-3">
												<div class="col-3 d-flex align-items-center justify-content-center">
													<div class="circle-icon bg-info text-center align-self-center overflow-hidden shadow">
														<i class="fe fe-credit-card tx-15 text-white"></i>
													</div>
												</div>
												<div class="col-9">
													<div class="pt-4 pb-3">
														<div class="d-flex	">
															<h6 class="mb-2 tx-12">Total Earnings</h6>
															<span class="badge bg-success-transparent text-success font-weight-semibold ms-auto rounded-pill lh-maincard px-2 my-auto"><i class="fa fa-caret-up me-1"></i>0.45%</span>
														</div>
														<div class="pb-0 mt-0">
															<div class="d-flex">
																<h4 class="tx-18 font-weight-semibold mb-0">$57.12M</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-8">
										<div class="card custom-card overflow-hidden">
											<div class="card-header border-bottom-0 d-flex">
												<h3 class="card-title mb-2 ">Sales Activity</h3>
												<div class="card-options ms-auto">
													<div class="btn-group p-0">
														<button class="btn btn-outline-light btn-sm" type="button">Week</button>
														<button class="btn btn-light btn-sm" type="button">Month</button>
														<button class="btn btn-outline-light btn-sm" type="button">Year</button>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="row mb-2 ps-lg-5">
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<p class="mb-1">Total Sales</p>
														<h5 class="mb-1">$52,618</h5>
														<p class="tx-11 text-muted">This month<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.9%</span></span></p>
													</div>
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<p class=" mb-1">Total Sales</p>
														<h5 class="mb-1">$11,197</h5>
														<p class="tx-11 text-muted">This Week<span class="text-danger ms-2"><i class="fa fa-caret-down me-2"></i><span class="badge bg-danger text-white tx-11">0.15%</span></span></p>
													</div>
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
														<p class=" mb-1">Total Sales</p>
														<h5 class="mb-1">$1,143</h5>
														<p class="tx-11 text-muted">Today<span class="text-success ms-2"><i class="fa fa-caret-up me-2"></i><span class="badge bg-success text-white tx-11">0.11%</span></span></p>
													</div>
												</div>
												<div id="statistics2"></div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-lg-12 col-xl-4">
										<div class="card">
											<div class="card-header bg-transparent pb-0">
												<div>
													<h3 class="card-title mb-2">Timeline</h3>
												</div>
											</div>
											<div class="card-body mt-0">
												<div class="latest-timeline mt-4">
													<ul class="timeline mb-0">
														<li>
															<div class="featured_icon1 danger">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">11.43 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Anita Letterback</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 success">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">12.22 am</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Paddy O'Furniture</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 primary">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">08.11 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark">Olive Yew</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 warning">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">9.45 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Maureen Biologist</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt. </p>
														</li>
														<li>
															<div class="featured_icon1 teal">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">12.09 am</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Peg Legge</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 secondary">
															</div>
														</li>
														<li class="mt-0 activity">
															<div><span class="tx-11 text-muted float-end">05.28 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Letterbac</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
														<li>
															<div class="featured_icon1 info">
															</div>
														</li>
														<li class="mt-0 activity pb-4">
															<div><span class="tx-11 text-muted float-end">9.10 pm</span></div>
															<a href="javascript:void(0);" class="tx-12 text-dark">
															<p class="mb-1 font-weight-semibold text-dark tx-13">Anita Letterback</p>
															</a>
															<p class="text-muted mt-0 mb-0 tx-12">Lorem ipsum dolor tempor incididunt . </p>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 px-0">
								<div class="row">
									<div class="col-sm-12 col-lg-12 col-xl-4">
										<div class="card">
											<div class="card-header pb-3">
												<h3 class="card-title mb-2">COUNTRY STATISTICS</h3>
											</div>
											<div class="card-body p-0 customers mt-1">
												<div class="country-card pt-0">
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">India</span>
															<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$32,879</span> (65%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-primary wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex mb-1">
															<span class="tx-13 font-weight-semibold">Russia</span>
															<div class="ms-auto"><span class="text-info mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$22,710</span> (55%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-info wd-50p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">Canada</span>
															<div class="ms-auto"><span class="text-danger mx-1"><i class="fe fe-trending-down"></i></span><span class="number-font">$56,291</span> (69%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-secondary wd-80p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">Brazil</span>
															<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$34,209</span> (60%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-warning wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-4">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">United States</span>
															<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$45,870</span> (86%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-teal wd-80p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
													<div class="mb-3">
														<div class="d-flex">
															<span class="tx-13 font-weight-semibold">Germany</span>
															<div class="ms-auto"><span class="text-success mx-1"><i class="fe fe-trending-up"></i></span><span class="number-font">$67,357</span> (73%)</div>
														</div>
														<div class="progress progress-style ht-5 mt-2 mb-4">
															<div class="progress-bar bg-success wd-70p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header pb-0">
												<h3 class="card-title mb-2">Weekly Visitors</h3>
											</div>
											<div class="card-body pb-0">
												<div class="row mb-4">
													<div class="col-6">
														<div class="text-muted tx-12 text-center mb-2">Average Male Visitors</div>
														<div class="d-flex justify-content-center align-items-center">
															<span class="me-3 tx-26 font-weight-semibold">2,132</span>
															<span class="text-success font-weight-semibold"><i class="fa fa-caret-up me-2"></i>0.23%</span>
														</div>
													</div>
													<div class="col-6">
														<div class="text-muted tx-12 text-center mb-2">Average Female Visitors</div>
														<div class="d-flex justify-content-center align-items-center">
															<span class="me-3 tx-26 font-weight-semibold">1,053</span>
															<span class="text-danger font-weight-semibold"><i class="fa fa-caret-down me-2"></i>0.11%</span>
														</div>
													</div>
												</div>
												<div id="Viewers1"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-12">
										<div class="card">
											<div class="card-header pb-3">
												<h3 class="card-title mb-2">MAIN TASKS</h3>
											</div>
											<div class="card-body p-0 customers mt-1">
												<div class="">
													<label class="p-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															accurate information at any given point.
														</span>
														<span class="ms-auto"><span class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															sharing the information with clients or stakeholders.
														</span>
														<span class="ms-auto"><span class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2">Today</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															Hearing the information and responding .
														</span>
														<span class="ms-auto"><span class="badge badge-primary font-weight-semibold px-2 py-1 tx-11 me-2 float-end">22 hrs</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															Setting up and customizing your own sales.
														</span>
														<span class="ms-auto"> <span class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">1 Day</span></span>
													</label>
													<label class="p-2 mt-2 d-flex">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															To have a complete 360° overview of sales information, having.
														</span>
														<span class="ms-auto"> <span class="badge badge-light-transparent font-weight-semibold px-2 py-1 tx-11 me-2">2 Days</span></span>
													</label>
													<label class="p-2 mt-2 d-flex mb-4">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input checked="" type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 me-5 my-auto">
															New Admin Launched.
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-12 col-md-12 col-xs-12">
							<div class="card overflow-hidden">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Transactions</h3>
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
										<a href="javascript:void(0);" class="border-0">
										<div class="list-group-item list-group-item-action border-0">
											<div class="media mt-0">
												<span class="me-3 bg-primary-transparent text-primary transaction-icon"><i class="fe fe-chevrons-right"></i></span>
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-13 font-weight-sembold text-dark"><span class="me-3">montha.K</span>

															</h5>
															<p class="mb-0 tx-12 text-muted">24-08-2021</p>
														</div>
														<span class="ms-auto wd-25p tx-12">
															<span class="text-primary tx-11 text-end d-block">Processing</span>
															<span class="float-end text-success font-weight-semibold">
																$256,347
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0">
												<div class="media mt-0">
													<span class="me-3 bg-secondary-transparent text-secondary transaction-icon"><i class="fe fe-bookmark"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Allie Grater</h5>
																<p class="mb-0 tx-12 text-muted">31-12-2021</p>
															</div>
															<span class="ms-auto wd-45p tx-12">
																<span class="float-end text-danger font-weight-semibold">
																	$12,345
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<span class="me-3 bg-info-transparent text-info transaction-icon"><i class="fe fe-more-horizontal"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark"><span class="me-3">Gabel</span></h5>
																<p class="mb-0 tx-12 text-muted">15-09-2021</p>
															</div>
															<span class="ms-auto wd-45p  tx-12">
																<span class="text-primary tx-11 text-end d-block">Processing</span>
																<span class="float-end text-success font-weight-semibold">
																	$34,567
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<span class="me-3 bg-success-transparent text-success transaction-icon"><i class="fe fe-chevrons-right"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark"><span class="me-3">Emmanuel</span></h5>
																<p class="mb-0 tx-12 text-muted">30-11-2021</p>
															</div>
															<span class="ms-auto wd-45p tx-12">
																<span class="text-primary tx-11 text-end d-block">Processing</span>
																<span class="float-end text-danger font-weight-semibold">
																	$16,746
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<span class="me-3 bg-warning-transparent text-warning transaction-icon"><i class="fe fe-file-text"></i></span>
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
																<p class="mb-0 tx-12 text-muted">20-10-2021</p>
															</div>
															<span class="ms-auto wd-45p tx-12">
																<span class="float-end text-success font-weight-semibold">
																	$45,900
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="card custom-card overflow-hidden">
								<div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title mb-0">Weekly Budget</h3> <span class="d-block tx-12 mb-0 text-muted"></span>
									</div>
								</div>
								<div class="card-body p-0">
									<div id="budget"></div>
								</div>
							</div>
							<div class="card overflow-hidden">
								<div class="card-header pb-1">
									<h3 class="card-title mb-2">Recent Customers</h3>
								</div>
								<div class="card-body p-0 customers mt-1">
									<div class="list-group list-lg-group list-group-flush">
										<a href="javascript:void(0);" class="border-0">
										<div class="list-group-item list-group-item-action border-0">
											<div class="media mt-0">
												<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="../assets/img/faces/2.jpg" alt="Image description">
												<div class="media-body">
													<div class="d-flex align-items-center">
														<div class="mt-0">
															<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Samantha Melon</h5>
															<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
														</div>
														<span class="ms-auto wd-45p tx-14">
															<span class="float-end badge bg-success">
															<span class="font-weight-semibold">paid </span>
														</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="../assets/img/faces/1.jpg" alt="Image description">
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Allie Grater</h5>
																<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
															</div>
															<span class="ms-auto wd-45p tx-14">
																<span class="float-end badge bg-danger">
																<span class="font-weight-semibold">Pending</span>
															</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="../assets/img/faces/5.jpg" alt="Image description">
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Gabe Lackmen</h5>
																<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
															</div>
															<span class="ms-auto wd-45p  tx-14">
																<span class="float-end badge bg-danger">
																<span class="font-weight-semibold">Pending</span>
															</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
										<a href="javascript:void(0);" class="border-0 mb-3">
											<div class="list-group-item list-group-item-action border-0" >
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle me-3 my-auto shadow" src="../assets/img/faces/7.jpg" alt="Image description">
													<div class="media-body">
														<div class="d-flex align-items-center">
															<div class="mt-1">
																<h5 class="mb-1 tx-13 font-weight-sembold text-dark">Manuel Labor</h5>
																<p class="mb-0 tx-12 text-muted">User ID: #1234</p>
															</div>
															<span class="ms-auto wd-45p tx-14">
															<span class="float-end badge bg-success">
															<span class="font-weight-semibold">Paid</span>
															</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- row  -->
					<div class="row">
						<div class="col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Product Summary</h4>
								</div>
								<div class="card-body pt-0">
									<div class="table-responsive">
										<table class="table  table-bordered text-nowrap mb-0" id="example2">
											<thead>
												<tr>
													<th class="text-center">Purchase Date</th>
													<th>Client Name</th>
													<th>Product ID</th>
													<th>Product</th>
													<th>Product Cost</th>
													<th>Payment Mode</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-center">#01</td>
													<td>Sean Black</td>
													<td>PRO12345</td>
													<td>Mi LED Smart TV 4A 80</td>
													<td>$14,500</td>
													<td>Online Payment</td>
													<td><span class="badge badge-success-transparent">Delivered</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#02</td>
													<td>Evan Rees</td>
													<td>PRO8765</td>
													<td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
													<td>$30,000</td>
													<td>Cash on delivered</td>
													<td><span class="badge badge-primary-transparent">Add Cart</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#03</td>
													<td>David Wallace</td>
													<td>PRO54321</td>
													<td>Vu 80cm (32 inch) HD Ready LED TV</td>
													<td>$13,200</td>
													<td>Online Payment</td>
													<td><span class="badge badge-danger-transparent">Pending</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#04</td>
													<td>Julia Bower</td>
													<td>PRO97654</td>
													<td>Micromax 81cm (32 inch) HD Ready LED TV</td>
													<td>$15,100</td>
													<td>Cash on delivered</td>
													<td><span class="badge badge-warning-transparent">Delivering</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#05</td>
													<td>Kevin James</td>
													<td>PRO4532</td>
													<td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
													<td>$5,987</td>
													<td>Online Payment</td>
													<td><span class="badge badge-danger-transparent">Shipped</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#06</td>
													<td>Theresa	Wright</td>
													<td>PRO6789</td>
													<td>Digisol DG-HR3400 Router </td>
													<td>$11,987</td>
													<td>Cash on delivered</td>
													<td><span class="badge badge-primary-transparent">Delivering</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#07</td>
													<td>Sebastian	Black</td>
													<td>PRO4567</td>
													<td>Dell WM118 Wireless Optical Mouse</td>
													<td>$4,700</td>
													<td>Online Payment</td>
													<td><span class="badge badge-info-transparent">Add to Cart</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
												<tr>
													<td class="text-center">#08</td>
													<td>Kevin Glover</td>
													<td>PRO32156</td>
													<td>Dell 16 inch Laptop Backpack </td>
													<td>$678</td>
													<td>Cash On delivered</td>
													<td><span class="badge badge-pink-transparent">Delivered</span></td>
													<td class="">
														<a class="btn btn-success btn-sm br-5 me-2" href="javascript:void(0)">
															<i>
																<svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path></svg>
															</i>
														</a>
														<a class="btn btn-danger btn-sm br-5" href="javascript:void(0)">
															<i>
																<svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path></svg>
															</i>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->

				</div>
				<!-- /Container -->
			</div>
			<!-- /main-content -->

			<!-- Sidebar-right-->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="panel panel-primary card mb-0 box-shadow">
					<div class="tab-menu-heading card-img-top-1 border-0 p-3">
						<div class="card-title mb-0">Notifications</div>
						<div class="card-options ms-auto">
							<a href="javascript:void(0);" class="sidebar-remove"><i class="fe fe-x"></i></a>
						</div>
					</div>
					<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg> Chat</a></li>
								<li class=""><a href="#side2" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"  class="side-menu__icon"  height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M12,18.5c0.83,0,1.5-0.67,1.5-1.5h-3C10.5,17.83,11.17,18.5,12,18.5z M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10 c5.52,0,10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8c4.41,0,8,3.59,8,8S16.41,20,12,20z M16,11.39 c0-2.11-1.03-3.92-3-4.39V6.5c0-0.57-0.43-1-1-1s-1,0.43-1,1V7c-1.97,0.47-3,2.27-3,4.39V14H7v2h10v-2h-1V11.39z M14,14h-4v-3 c0-1.1,0.9-2,2-2s2,0.9,2,2V14z"/></g></svg> Notifications</a></li>
								<li class=""><a href="#side3" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  class="side-menu__icon"  height="24" version="1.1" width="24"  viewBox="0 0 24 24"><path d="M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.48 17.52,2 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11C11.17,11 10.5,10.33 10.5,9.5C10.5,8.67 11.17,8 12,8C12.83,8 13.5,8.67 13.5,9.5C13.5,10.33 12.83,11 12,11Z" /></svg> Friends</a></li>
						</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane active " id="side1">
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-primary brround avatar-md">CH</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>New Websites is Created</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">30 mins ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-danger brround avatar-md">N</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare For the Next Project</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">2 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-info brround avatar-md">S</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Decide the live Discussion</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">3 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-warning brround avatar-md">K</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Meeting at 3:00 pm</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">4 hours ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-success brround avatar-md">R</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-pink brround avatar-md">MS</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">1 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center border-bottom p-3">
									<div class="">
										<span class="avatar bg-purple brround avatar-md">L</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">45 mintues ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
								<div class="list d-flex align-items-center p-3">
									<div class="">
										<span class="avatar bg-secondary brround avatar-md">U</span>
									</div>
									<a class="wrapper w-100 ms-3" href="javascript:void(0);" >
										<p class="mb-0 d-flex ">
											<b>Prepare for Presentation</b>
										</p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
												<small class="text-muted ms-auto">2 days ago</small>
												<p class="mb-0"></p>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="tab-pane  " id="side2">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/1.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Madeleine</strong> Hey! there I' am available....
											<div class="small text-muted">
												3 hours ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/11.jpg"></span>
										</div>
										<div>
											<strong>Anthony</strong> New product Launching...
											<div class="small text-muted">
												5 hour ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> New Schedule Realease......
											<div class="small text-muted">
												45 mintues ago
											</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-3">
											<span class="avatar avatar-lg brround cover-image" data-image-src="../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div>
											<strong>Olivia</strong> Hey! there I' am available....
											<div class="small text-muted">
												12 mintues ago
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane  " id="side3">
								<div class="list-group list-group-flush ">
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/13.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/7.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/2.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel" ><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/11.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/9.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="me-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="../assets/img/faces/4.jpg"></span>
										</div>
										<div class="">
											<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
										</div>
										<div class="ms-auto">
											<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/Sidebar-right-->

				<!-- Country-selector modal-->
				<div class="modal fade" id="country-selector">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header border-bottom">
								<h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="modal-body">
								<ul class="row p-3">
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block active">
											<span class="country-selector"><img alt="" src="../assets/img/flags/us_flag.jpg" class="me-3 language"></span>Usa
										</a>
									</li>
									<li class="col-lg-6 mb-2 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/italy_flag.jpg" class="me-3 language"></span>Italy
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/spain_flag.jpg" class="me-3 language"></span>Spain
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/india_flag.jpg" class="me-3 language"></span>India
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/french_flag.jpg" class="me-3 language"></span>France
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/mexico.jpg" class="me-3 language"></span>Mexico
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/singapore.jpg" class="me-3 language"></span>Singapore
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/poland.jpg" class="me-3 language"></span>Poland
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/austria.jpg" class="me-3 language"></span>Austria
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/russia_flag.jpg" class="me-3 language"></span>Russia
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/germany_flag.jpg" class="me-3 language"></span>Germany
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/argentina.jpg" class="me-3 language"></span>Argentina
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/brazil.jpg" class="me-3 language"></span>Brazil
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/uae.jpg" class="me-3 language"></span>U.A.E
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/china.jpg" class="me-3 language"></span>China
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/uk.jpg" class="me-3 language"></span>U.K
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/malaysia.jpg" class="me-3 language"></span>Malaysia
										</a>
									</li>
									<li class="col-lg-6 mb-2">
										<a href="#" class="btn btn-country btn-lg btn-block">
											<span class="country-selector"><img alt="" src="../assets/img/flags/canada.jpg" class="me-3 language"></span>Canada
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Country-selector modal-->

				<!-- Message Modal -->
				<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
					<div class="modal-dialog modal-dialog-right chatbox" role="document">
						<div class="modal-content chat border-0">
							<div class="card overflow-hidden mb-0 border-0">
								<!-- action-header -->
								<div class="action-header clearfix">
									<div class="float-start hidden-xs d-flex ms-2">
										<div class="img_cont me-3">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
										</div>
										<div class="align-items-center mt-0">
											<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
											<span class="dot-label bg-success"></span><span class="me-3 text-white">online</span>
										</div>
									</div>
									<ul class="ah-actions actions align-items-center">
										<li class="call-icon">
											<a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
												<i class="fe fe-phone"></i>
											</a>
										</li>
										<li class="video-icon">
											<a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
												<i class="fe fe-video"></i>
											</a>
										</li>
										<li class="dropdown">
											<a href="" data-bs-toggle="dropdown" aria-expanded="true">
												<i class="fe fe-more-vertical"></i>
											</a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li><i class="fa fa-user-circle"></i> View profile</li>
												<li><i class="fa fa-users"></i>Add friends</li>
												<li><i class="fa fa-plus"></i> Add to group</li>
												<li><i class="fa fa-ban"></i> Block</li>
										</ul>
										</li>
										<li>
											<a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
												<span aria-hidden="true"><i class="fe fe-x-circle text-white"></i></span>
											</a>
										</li>
								</ul>
								</div>
								<!-- action-header end -->

								<!-- msg_card_body -->
								<div class="card-body msg_card_body">
									<div class="chat-box-single-line">
										<abbr class="timestamp">july 1st, 2021</abbr>
									</div>
									<div class="d-flex justify-content-start">
										<div class="img_cont_msg">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Hi, how are you Jenna Side?
											<span class="msg_time">8:40 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end ">
										<div class="msg_cotainer_send">
											Hi Connor Paige i am good tnx how about you?
											<span class="msg_time_send">8:55 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start ">
										<div class="img_cont_msg">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											I am good too, thank you for your chat template
											<span class="msg_time">9:00 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end ">
										<div class="msg_cotainer_send">
											You welcome Connor Paige
											<span class="msg_time_send">9:05 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start ">
										<div class="img_cont_msg">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Yo, Can you update Views?
											<span class="msg_time">9:07 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end mb-4">
										<div class="msg_cotainer_send">
											But I must explain to you how all this mistaken  born and I will give
											<span class="msg_time_send">9:10 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start ">
										<div class="img_cont_msg">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Yo, Can you update Views?
											<span class="msg_time">9:07 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end mb-4">
										<div class="msg_cotainer_send">
											But I must explain to you how all this mistaken  born and I will give
											<span class="msg_time_send">9:10 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start ">
										<div class="img_cont_msg">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Yo, Can you update Views?
											<span class="msg_time">9:07 AM, Today</span>
										</div>
									</div>
									<div class="d-flex justify-content-end mb-4">
										<div class="msg_cotainer_send">
											But I must explain to you how all this mistaken  born and I will give
											<span class="msg_time_send">9:10 AM, Today</span>
										</div>
										<div class="img_cont_msg">
											<img src="../assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
									</div>
									<div class="d-flex justify-content-start">
										<div class="img_cont_msg">
											<img src="../assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
										</div>
										<div class="msg_cotainer">
											Okay Bye, text you later..
											<span class="msg_time">9:12 AM, Today</span>
										</div>
									</div>
								</div>
								<!-- msg_card_body end -->
								<!-- card-footer -->
								<div class="card-footer">
									<div class="msb-reply d-flex">
										<div class="input-group">
											<input type="text" class="form-control " placeholder="Typing....">
											<div class="input-group-append ">
												<button type="button" class="btn btn-primary ">
													<i class="far fa-paper-plane" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
								</div><!-- card-footer end -->
							</div>
						</div>
					</div>
				</div>

				<!--Video Modal -->
				<div id="videomodal" class="modal fade">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body mx-auto text-center p-7">
								<h5>Nowa Video call</h5>
								<img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
								<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
								<h6>Calling...</h6>
								<div class="mt-5">
									<div class="row">
										<div class="col-4">
											<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
												<i class="fas fa-video-slash"></i>
											</a>
										</div>
										<div class="col-4">
											<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
												<i class="fas fa-phone bg-danger text-white"></i>
											</a>
										</div>
										<div class="col-4">
											<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
												<i class="fas fa-microphone-slash"></i>
											</a>
										</div>
									</div>
								</div>
							</div><!-- modal-body -->
						</div>
					</div><!-- modal-dialog -->
				</div><!-- modal -->

				<!-- Audio Modal -->
				<div id="audiomodal" class="modal fade">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-body mx-auto text-center p-7">
								<h5>Nowa Voice call</h5>
								<img src="../assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
								<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
								<h6>Calling...</h6>
								<div class="mt-5">
									<div class="row">
										<div class="col-4">
											<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
												<i class="fas fa-volume-up bg-light"></i>
											</a>
										</div>
										<div class="col-4">
											<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
												<i class="fas fa-phone text-white bg-primary"></i>
											</a>
										</div>
										<div class="col-4">
											<a class="icon icon-shape  rounded-circle mb-0 me-3" href="javascript:void(0);">
												<i class="fas fa-microphone-slash bg-light"></i>
											</a>
										</div>
									</div>
								</div>
							</div><!-- modal-body -->
						</div>
					</div><!-- modal-dialog -->
				</div><!-- modal -->



@endsection
