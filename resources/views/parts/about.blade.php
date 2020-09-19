@include("parts.common", [ "title" => "会社概要" ])
@include("parts.nav")

<!-- Image Showcases -->
<section class="showcase">
   <div class="container-fluid p-0">
     <div class="row no-gutters">
       <div class="col-lg-6 order-lg-1 my-auto showcase-text">
		<h2>会社概要ページ</h2>
		
		<p class="lead mb-0">
			株式会社○○の会社概要についてお知らせします。<br />
			現在の時間は {{ $current_time }} です<br />
			<br />
			
			<ul>
				<li>社　名：　株式会社○○</li>
				<li>創　業：　2020年12月31日</li>
				<li>代表者：　○○ △△</li>
				<li>所在地：　東京都千代田区千代田1-1</li>
			</ul>
		</p>
       </div>
	  </div>
	</div>
</section>

@include("parts.footer")