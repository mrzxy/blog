<template>
	<div class="side-bar-inner-box archived-mindtalk lime-footer-box" id="archived-mindtalk">
		<h3>深度解读</h3>
		<div class="mindtalk-mini-card" style="background-image: url('http://imxiaochengxu.oss-cn-shanghai.aliyuncs.com/2016/11/07/545183672451180.jpg?x-oss-process=image/resize,m_fill,w_520,h_360,limit_0/auto-orient,0/sharpen,120/quality,q_95')">
			<h4>imXiaoChengXu</h4>
			<p class="des">微信小程序：将让7亿人的手机从此大不相同 | 深度解读</p>
			<a href="//v.youku.com/v_show/id_XMTc2NzA2ODM1Ng==.html?from=s1.8-1-1.2&amp;spm=a2h0k.8191407.0.0"></a>
		</div>
	</div>
</template>

<script>
	export default {
		mounted: () => {
			console.log('热门文章')
			Vue.http.get('/api/hot-article').then( (response) => {
				console.log(response);
			}, (response) => {
				console.log(response);
			})
		}
	}
</script>