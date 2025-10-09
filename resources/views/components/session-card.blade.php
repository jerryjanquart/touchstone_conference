<div class="col-md-6">
                     <div class="card shadow-sm h-100 border-0 card-lift overflow-hidden">
                        <div class="row h-100 g-0">
                           <a
                              href="{{ $url }}"
                              class="col-lg-5 col-md-12"
                              style="
                                 background-image: url({{ $imgUrl }});
                                 background-size: cover;
                                 background-repeat: no-repeat;
                                 background-position: center;
                                 min-height: 13rem;
                              "></a>
                           <div class="col-lg-7 col-md-12">
                              <div
                                 class="card-body h-100 d-flex align-items-start flex-column border rounded-end-lg-3 rounded-bottom-3 rounded-top-0 rounded-start-lg-0 border-start-lg-0 border-top-0 border-top-lg">
                                 <div class="mb-5">
                                    <small class="text-uppercase fw-semibold ls-md">Conference</small>
                                    <h4 class="my-2"><a class="secondary" href="{{ $url }}" class="text-reset text-black" style="font-family: 'Times New Roman', Times, serif; font-size: 1.7rem; font-weight: bold; line-height: 1.9rem; text-decoration:none;">{{ $slot }}</a></h4>
                                    <p class="text-black">{{ $people }}</p>
                                 </div>
                                 <div class="mt-auto">
                                    <small class="me-2 text-black">{{ $date }}</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>