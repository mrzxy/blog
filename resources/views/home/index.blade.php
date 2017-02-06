@extends('app')
	
@section('app-body')
	<div id="main-content-holder" role="main">
				<div class="main-content-wrapper">
					<div class="tips" style="margin-top:20px;font-size: 13px;line-height:1.7;background:#22B9B9;padding:15px;color:#fff;border-radius: 5px;"> I'M小程序致力研究学习微信小程序，博客即将改版，来自typecho的朋友可以点击右上角『给我留言』推荐你喜欢的博客，我将重新设计制作一款模板供大家免费下载使用！君子一言，驷马难追:) <br> 另：大家如果需要我在线指导微信小程序的开发，我会考虑建立一个QQ群，总之留言给我！ </div>
 
					<div class="carousel-banner">
						<ul class="slides">
							<li style="background-image: url('http://imxiaochengxu.oss-cn-shanghai.aliyuncs.com/2016/11/12/435794115723604.jpg')"><a href="http://www.imxiaochengxu.com/tutorial/weather-forecast-wechat-small-program-development-series-of-tutorials-on.html?utm_source=imxiaochengxu&amp;utm_medium=home_banner_channel"></a><p class="des">微信小程序原创开发系列教程 | 天气预报APP开发</p></li>
							<li style="background-image: url('http://imxiaochengxu.oss-cn-shanghai.aliyuncs.com/2016/11/06/418453849285496.png')"><a href="http://www.imxiaochengxu.com/hot/wechat-small-program-interface-for-the-ultimate-version-of-the-application-latest-update.html?utm_source=imxiaochengxu&amp;utm_medium=home_banner_channel"></a><p class="des">微信小程序接口申请终极版！最新更新！ | 轻松3分钟搞定微信小程序开发资格</p></li>
							
							<li style="background-image: url('http://imxiaochengxu.oss-cn-shanghai.aliyuncs.com/2016/11/07/583002766643117.jpg')"><a href="http://www.imxiaochengxu.com/hot/club-dev-chat-wechat-a-small-program.html?utm_source=imxiaochengxu&amp;utm_medium=home_banner_channel"></a><p class="des">让我们来聊一聊微信小程序 | 关于小程序的利弊客观分析以及解决方案猜想</p></li>

							
						</ul>
					</div>
				
	 		 
					<ul id="mind-list">
						<li class="home-mind-container" itemscope itemtype="http://schema.org/BlogPosting">
							
							<div class="text-left date-info vertical-align-wrapper">
								<div class="vertical-align-wrapper">
									<span class="date-zh"> 星期一 </span>
									<span class="date-uk"> 12-08 </span>
								</div>
								<div class="title-line">
									<div class="title-line-left"></div>
									<div class="title-line-right"></div>
								</div>
							</div>
							<div class="mindtalk-list">&nbsp;</div>
					
							<ul class="mind-list-ul">
								<li class="mind-item vertical-align-wrapper clearfix" data-el="mind-item" data-itemid="">
							 		<div class="mind-vote p-r-10"> <div class="text-center user-vote" data-el="user-vote" data-voteid="14490" data-generalid="14490"> <section class="arrow-vote"><i class="limeicon icon-mslike"></i></section> <section class="vote-total" data-el="vote-num">222</section> <span class="vote-hover">333</span> </div> </div>

									<div class="mind-thumb-image"> 
										<a href="" target="_blank" style="background-image: url('./img/1.gif?x-oss-process=image/resize,m_fill,w_200,h_200,limit_0/auto-orient,0/sharpen,120/quality,q_100')"></a>
									</div>
									 
									<a itemtype="url" href="" target="_blank" class="mind-content">
										<div class="mind-title">
											<div class="mind-title" data-action="to-sharepage" itemprop="name headline">
												为什么小程序能适配不同机型？因为微信做了这个
											</div>
										</div>
										<div class="mind-des">
											我们都知道，小程序是一个跨系统的平台。这就意味着，小程序会在不同的设备上运行，但不同设备的分辨率会有差异。在小程序中，如何在分辨率不同的设备上保证视觉元素的正常显示？这就需要名为 rpx 的动态...
										</div>
									</a>

									<div class="profile-reply">  
										<div class="user-image-holder" data-el="card-holder">
											<a class="user-reply" href="#comments">
												<i class="limeicon icon-tongzhi"></i>
												<span class="reply-num" itemprop="discussionUrl">333</span>
											</a>
										</div>
									</div>
								</li>
							</ul>

							
							<ul class="post-meta hidden">
								<li itemprop="author" itemscope itemtype="http://schema.org/Person">作者<a itemprop="name" href="" rel="author">zxy</a></li>
								<li>时间<time datetime="" itemprop="datePublished">2011-01-10</time></li>
								  
							</ul>
				        </li>
					</ul>
    			</div>
			</div>
@endsection

@section('app-js')
	<script src="{{asset('js/index.js')}}"></script>
@endsection
