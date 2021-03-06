@extends('layouts.sidbar')



  @section('content')

            <div class="col-md-10 mt-5 mb-5 p-5">

            	 @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        {{--  <img src="uploads/{{ Session::get('file') }}">  --}}
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

               <div class="empty text-center">
                <svg width="400" height="300" viewBox="0 0 162 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                  <path d="M110.387 18.3501C113.757 14.972 113.757 9.49488 110.387 6.11671C107.018 2.73855 101.555 2.73854 98.1852 6.11671L30.2601 74.2161C26.8906 77.5943 26.8906 83.0714 30.2601 86.4496C33.6296 89.8277 39.0927 89.8277 42.4622 86.4496L110.387 18.3501Z" fill="#BFEBFE"/>
                  <path d="M110.387 41.4177C113.757 38.0395 113.757 32.5624 110.387 29.1843C107.018 25.8061 101.555 25.8061 98.1852 29.1843L21.9153 105.65C18.5458 109.028 18.5458 114.505 21.9153 117.883C25.2848 121.261 30.7479 121.261 34.1174 117.883L110.387 41.4177Z" fill="#BFEBFE"/>
                  <path d="M133.112 41.4177C136.482 38.0395 136.482 32.5624 133.112 29.1842C129.743 25.8061 124.28 25.8061 120.91 29.1842L44.6404 105.65C41.2709 109.028 41.2709 114.505 44.6404 117.883C48.01 121.261 53.473 121.261 56.8426 117.883L133.112 41.4177Z" fill="#BFEBFE"/>
                  <path d="M155.84 41.4177C159.21 38.0395 159.21 32.5624 155.84 29.1842C152.47 25.8061 147.007 25.8061 143.638 29.1842L67.368 105.65C63.9984 109.028 63.9984 114.505 67.368 117.883C70.7375 121.261 76.2006 121.261 79.5701 117.883L155.84 41.4177Z" fill="#BFEBFE"/>
                  <path d="M86.228 18.3501C89.5975 14.972 89.5975 9.49488 86.228 6.11671C82.8585 2.73855 77.3954 2.73854 74.0259 6.11671L6.10073 74.2161C2.73121 77.5943 2.73121 83.0714 6.10073 86.4496C9.47025 89.8277 14.9333 89.8277 18.3028 86.4496L86.228 18.3501Z" fill="#BFEBFE"/>
                  <path d="M80.7328 64.9269L65.0192 68.7427L60.0244 48.0659L70.8275 45.4427L76.9272 49.1735L80.7328 64.9269Z" fill="#1976D2"/>
                  <path d="M76.3093 49.8446L71.6442 50.9771L70.5146 46.3004L76.3093 49.8446Z" fill="#E3F2FD"/>
                  <path d="M72.4431 59.2409L72.2098 55.1158L73.7115 54.7511L73.8996 61.3742L72.3291 61.7559L70.6199 58.369L70.663 62.1605L69.0964 62.5407L66.2366 56.5659L67.7427 56.2002L69.4175 59.9751L69.3268 55.8156L70.6126 55.5029L72.4431 59.2409Z" fill="#FAFAFA"/>
                  <path d="M40.1909 101.201L15.0946 107.49L6.86196 74.4661L24.1156 70.1427L33.9184 76.0402L40.1909 101.201Z" fill="#FF5722"/>
                  <path d="M32.9384 77.1217L25.4879 78.9885L23.6258 71.5188L32.9384 77.1217Z" fill="#FBE9E7"/>
                  <path d="M18.1812 93.7678L18.8673 96.5197L17.291 96.9145L15.34 89.0889L17.9995 88.4222C18.7711 88.2292 19.4476 88.3152 20.0259 88.6799C20.6043 89.0446 20.9895 89.6107 21.1808 90.378C21.3721 91.1453 21.2954 91.8067 20.9531 92.3654C20.6107 92.9241 20.0361 93.3029 19.2314 93.5047L18.1812 93.7678ZM17.8529 92.4505L18.936 92.1792C19.2364 92.1038 19.444 91.9477 19.5595 91.7089C19.675 91.4702 19.6852 91.1638 19.5913 90.787C19.4939 90.3965 19.3326 90.1067 19.1069 89.917C18.8816 89.7283 18.6273 89.6676 18.344 89.7347L17.2445 90.0099L17.8529 92.4505ZM23.5368 95.3497L21.5859 87.5236L23.65 87.0067C24.5613 86.7781 25.3607 86.8861 26.0457 87.331C26.7323 87.7755 27.2067 88.502 27.4696 89.5095L27.7857 90.7777C28.0421 91.8062 27.9721 92.682 27.5775 93.4021C27.1813 94.1257 26.5083 94.6047 25.5578 94.843L23.5368 95.3497ZM23.4898 88.446L24.7854 93.6433L25.2575 93.5247C25.783 93.3934 26.1185 93.1614 26.2634 92.8303C26.4083 92.4991 26.4018 91.9919 26.2431 91.3082L25.9042 89.9486C25.7219 89.2173 25.4929 88.7334 25.2172 88.4966C24.9414 88.2593 24.5569 88.1946 24.064 88.3031L23.49 88.4465L23.4898 88.446ZM32.9699 89.5932L30.5198 90.2073L31.3159 93.4002L29.7395 93.795L27.7886 85.9694L32.1098 84.8865L32.4381 86.2038L29.6932 86.8914L30.1931 88.8963L32.6431 88.2826L32.9699 89.5932Z" fill="#FFEBEE"/>
                  <path d="M123.696 90.2837L106.632 81.0279L118.75 58.5742L130.481 64.9381L132.928 73.1765L123.696 90.2837Z" fill="#388E3C"/>
                  <path d="M131.84 73.2772L126.774 70.5293L129.515 65.4506L131.84 73.2772Z" fill="#E8F5E9"/>
                  <path d="M120.374 75.6668L122.717 73.9979L124.596 75.0171L120.858 77.375L120.956 81.8867L119.057 80.8568L119.16 77.9177L116.761 79.6114L114.868 78.5844L118.683 76.1953L118.612 71.7707L120.487 72.788L120.374 75.6668Z" fill="white"/>
                  </g>
                  <defs>
                  <clipPath id="clip0">
                  <rect width="162" height="124" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>
                  
                  <h3>No files</h3>
                   <p >No files have been uploaded yet</p>
                  {{-- <a class="btn btn-primary" href="/file_upload">Upload file</a> --}}
                  <div class="dropdown">
	  <a href="#" class="btn btn-primary upload-btn text-white  mb-1 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Upload File
	  </a>
	  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
	    <small class="ml-1 text-secondary">Upload a file from</small>
	    <div class="dropdown-divider"></div>
	    <button class="dropdown-item" data-toggle="modal" role="button" style="font-size: 14px;" type="button"><img src="{{ asset('css/icons/fromdrive.png') }}" style="height: 16px; width: 16px; color:#717171; " /> Google Drive</button>
	     <button class="dropdown-item " style="font-size: 14px;" id="computer" data-target="#modalCenter"><img src="{{ asset('css/icons/laptop.png') }}" style="height: 16px; width: 16px; color:#717171;"/> Your computer</button>
    {{-- <button class="dropdown-item" type="button">Something else here</button> --}}
			  </div>
			</div>
           </div>
        </div>


@stop

@section('script')

<script>
$(document).ready(function(){
    $("#computer").click(function(){
        $("#computer-modal").modal("show");
    });
});
</script>
@stop

        <!-- Modal HTML -->
 <div id="computer-modal" class="modal fade" tabindex="-1">
                               <div class="modal-dialog " role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title">File Upload</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                           <div class="form">
                              <form   method="POST" action="{{ route('file.upload') }}" enctype="multipart/form-data">
                                   @csrf

                                 <div>
                                    <label for="" aria-label> Name: </label>
                                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name">
                                     @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                 </div>

                                 <div class="mt-4">
                                    <label for="select_file"> Select File: </label>
                                    <input name="file" type="file" class="form-control {{ $errors->has('file') ? ' is-invalid' : '' }}">
                                     @if ($errors->has('file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                 </div>
                             
                           </div>
                         </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                   <button type="submit" class="btn btn-primary">Upload</button>
                                 </div>
                          </form>
                       </div>
                     </div>
</div>
<!-- Modal HTML -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>

