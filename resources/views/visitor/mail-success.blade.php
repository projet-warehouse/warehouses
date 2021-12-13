@extends('layout/app')

@section('content')
	
	<!-- Mail Success-->
	<section class="mail-success section page">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-12">
					<div class="mail-inner">
						<h2><span>Sent</span> Successfully</h2>
						<p>Thank you so much for your message. We check e-mail frequently and will try our best to respond to your inquiry.</p>
						<div class="button">
							<a class="btn primary" href="/">Go Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Mail Success -->			

	<!--debut footer-->

	@include('layout/footer')

    <!--fin footer-->
	
@endsection