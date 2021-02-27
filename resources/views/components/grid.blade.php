@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex align-items-center user-member__title mb-30 mt-30">
               <h4 class="text-capitalize">Grid</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Equal-width</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row w-100">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col">
                                    1 of 2
                                 </div>
                                 <div class="col">
                                    2 of 2
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    1 of 3
                                 </div>
                                 <div class="col">
                                    2 of 3
                                 </div>
                                 <div class="col">
                                    3 of 3
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Setting one column width</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col">
                                    1 of 3
                                 </div>
                                 <div class="col-6">
                                    2 of 3 (wider)
                                 </div>
                                 <div class="col">
                                    3 of 3
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    1 of 3
                                 </div>
                                 <div class="col-5">
                                    2 of 3 (wider)
                                 </div>
                                 <div class="col">
                                    3 of 3
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Variable width content</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row justify-content-md-center">
                                 <div class="col col-lg-2">
                                    1 of 3
                                 </div>
                                 <div class="col-md-auto">
                                    Variable width content
                                 </div>
                                 <div class="col col-lg-2">
                                    3 of 3
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    1 of 3
                                 </div>
                                 <div class="col-md-auto">
                                    Variable width content
                                 </div>
                                 <div class="col col-lg-2">
                                    3 of 3
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Variable width content</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row justify-content-md-center">
                                 <div class="col col-lg-2">
                                    1 of 3
                                 </div>
                                 <div class="col-md-auto">
                                    Variable width content
                                 </div>
                                 <div class="col col-lg-2">
                                    3 of 3
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col">
                                    1 of 3
                                 </div>
                                 <div class="col-md-auto">
                                    Variable width content
                                 </div>
                                 <div class="col col-lg-2">
                                    3 of 3
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Equal-width multi-row</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col">col</div>
                                 <div class="col">col</div>
                                 <div class="w-100"></div>
                                 <div class="col">col</div>
                                 <div class="col">col</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>All breakpoints</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col">col</div>
                                 <div class="col">col</div>
                                 <div class="col">col</div>
                                 <div class="col">col</div>
                              </div>
                              <div class="row">
                                 <div class="col-8">col-8</div>
                                 <div class="col-4">col-4</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Stacked to horizontal</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-sm-8">col-sm-8</div>
                                 <div class="col-sm-4">col-sm-4</div>
                              </div>
                              <div class="row">
                                 <div class="col-sm">col-sm</div>
                                 <div class="col-sm">col-sm</div>
                                 <div class="col-sm">col-sm</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Mix and match</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                              <div class="row">
                                 <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                                 <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                              </div>
                              <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                              <div class="row">
                                 <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                 <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                 <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                              </div>
                              <!-- Columns are always 50% wide, on mobile and desktop -->
                              <div class="row">
                                 <div class="col-6">.col-6</div>
                                 <div class="col-6">.col-6</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Vertical alignment</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row bd-example-row-flex-cols">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row align-items-start">
                                 <div class="col">
                                    One of three columns
                                 </div>
                                 <div class="col">
                                    One of three columns
                                 </div>
                                 <div class="col">
                                    One of three columns
                                 </div>
                              </div>
                              <div class="row align-items-center">
                                 <div class="col">
                                    One of three columns
                                 </div>
                                 <div class="col">
                                    One of three columns
                                 </div>
                                 <div class="col">
                                    One of three columns
                                 </div>
                              </div>
                              <div class="row align-items-end">
                                 <div class="col">
                                    One of three columns
                                 </div>
                                 <div class="col">
                                    One of three columns
                                 </div>
                                 <div class="col">
                                    One of three columns
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col align-self-start">
                                    One of three columns
                                 </div>
                                 <div class="col align-self-center">
                                    One of three columns
                                 </div>
                                 <div class="col align-self-end">
                                    One of three columns
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Horizontal alignment</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row justify-content-start">
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                              </div>
                              <div class="row justify-content-center">
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                              </div>
                              <div class="row justify-content-end">
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                              </div>
                              <div class="row justify-content-around">
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                              </div>
                              <div class="row justify-content-between">
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                                 <div class="col-4">
                                    One of two columns
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Offset classes</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-4">.col-md-4</div>
                                 <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                                 <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12">
            <div class="grid-area mb-25">
               <div class="card">
                  <div class="card-header">
                     <h4>Margin utilities</h4>
                  </div>
                  <div class="card-body">
                     <div class="bd-example-row">
                        <div class="bd-example">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-md-4">.col-md-4</div>
                                 <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                                 <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                              </div>
                              <div class="row">
                                 <div class="col-auto mr-auto">.col-auto .mr-auto</div>
                                 <div class="col-auto">.col-auto</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection