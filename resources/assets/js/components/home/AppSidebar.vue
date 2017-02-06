<template>
	<div class="kit-hidden-tb lime-side-bar" id="secondary" role="complementary">
				
				<sidebar-hot-article></sidebar-hot-article>

				<div class="lime-footer-box" id="lime-footer">
					<div class="lime-footer">
						<div class="lime-subscriber clearfix">
							<div id="mc_embed_signup">
								<form action="/" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
									<div id="mc_embed_signup_scroll">
										<div class="subscriber-title">订阅我</div>
										<p>关注微信小程序前沿方向</p>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>

										<div style="position: absolute; left: -5000px;">
											<input type="text" name="b_f770959951cdcc1bba7ab56cb_d66225d2ad" tabindex="-1">
										</div>
										<div class="mc-field-group">
											<input type="email" name="EMAIL" class="required email lime-input lime-mail js-subscribe-email" id="mce-EMAIL" placeholder=" 请输入邮箱">
											<div class="subscribe-tip-container">
												<div class="subscribe-tip-content js-subscribe-tip">
													<span class="limeicon icon-jianpan subscribe-keyboard"></span>
													<input type="submit" value="订阅" name="subscribe" id="mc-embedded-subscribe" class="lime-btn subscriber-submit">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="des"> 
							专注研究探索微信小程序开发/资讯 <a href="me/" target="_blank" class="footer-link">了解更多</a>
						</div> 
					</div>
				</div>

				<div class="lime-footer-box" id="lime-tags">
					<h3 class="widget-title">热门话题</h3>
					<ul class="tags-list clearfix"> 
						<li><a href="tag/%E5%BE%AE%E4%BF%A1%E5%B0%8F%E7%A8%8B%E5%BA%8F/" rel="tag" class="size-10" title="5 个话题">微信小程序</a></li> 
						<li><a href="tag/%E5%BF%AB%E9%80%9F%E4%B8%8A%E6%89%8B/" rel="tag" class="size-5" title="1 个话题">快速上手</a></li> 
						<li><a href="tag/%E6%B3%A8%E5%86%8C%E6%B5%81%E7%A8%8B/" rel="tag" class="size-5" title="1 个话题">注册流程</a></li>
						<li><a href="tag/%E6%9C%AA%E6%9D%A5%E5%8F%91%E5%B1%95/" rel="tag" class="size-5" title="3 个话题">未来发展</a></li>
						<li><a href="tag/App-Store/" rel="tag" class="size-5" title="1 个话题">App Store</a></li>
						<li><a href="tag/%E5%BC%80%E5%8F%91/" rel="tag" class="size-5" title="1 个话题">开发</a></li>
						<li><a href="tag/%E5%BE%AE%E4%BF%A1%E5%B0%8F%E7%A8%8B%E5%BA%8F%E5%86%85%E6%B5%8B%E7%94%B3%E8%AF%B7/" rel="tag" class="size-5" title="1 个话题">微信小程序内测申请</a></li>
						<li><a href="tag/%E5%B0%8F%E7%A8%8B%E5%BA%8F%E5%B8%B8%E8%A7%81%E9%97%AE%E9%A2%98/" rel="tag" class="size-5" title="1 个话题">小程序常见问题</a></li>
					</ul> 
				</div>
			</div>
		</div>
</template>

<script>
	import SidebarHotArticle from './app_sidebar/HotArticle.vue'

	export default {
		components: {SidebarHotArticle},
		
		data: () => {
			return {
				test: 123
			}
		}
	}
</script>