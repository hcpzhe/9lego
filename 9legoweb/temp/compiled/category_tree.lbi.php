 
			
			<ul class="catetree-list">
				<li>
					<h3><span>&gt;</span><a href="#" target="_blank">白酒</a></h3>
					<p><a href="#" target="_blank">茅台</a><a href="#" target="_blank">五粮液</a><a target="_blank" href="#">汾酒</a><a target="_blank" href="#">泸州老窖</a></p>
					<p><a href="#" target="_blank">酱香型</a><a href="#" target="_blank">浓香型</a><a href="#" target="_blank">贵州</a><a href="#" target="_blank">四川</a></p>
				</li>
				
				<li>
					<h3><span>&gt;</span><a href="#" target="_blank">葡萄酒</a></h3>
					<p><a href="#" target="_blank">法国</a><a href="#" target="_blank">德国</a><a href="#" target="_blank">意大利</a><a href="#" target="_blank">西班牙</a></p>
					<p><a href="#" target="_blank">赤霞珠</a><a href="#" target="_blank">梅鹿辄</a><a href="#" target="_blank">西拉</a><a href="#" target="_blank">霞多丽</a></p>
				</li>
				
				<li>
					<h3><span>&gt;</span><a href="#" target="_blank">洋酒</a></h3>
					<p><a href="#" target="_blank">白兰地</a><a href="#" target="_blank">威士忌</a><a href="#" target="_blank">伏特加</a><a href="#" target="_blank">金酒</a></p>
					<p><a href="#" target="_blank">人头马</a><a href="#" target="_blank">芝华士</a><a href="#" target="_blank">马爹利</a><a href="#" target="_blank">深蓝</a></p>
				</li>
				
				<li>
					<h3><span>&gt;</span><a href="#" target="_blank">啤酒</a></h3>
					<p><a href="#" target="_blank">弗伦斯堡</a><a href="#" target="_blank">哈尔博</a><a href="#" target="_blank">喜力</a><a href="#" target="_blank">海特</a></p>
					<p><a href="#" target="_blank">青岛啤酒</a><a href="#" target="_blank">百威</a><a href="#" target="_blank">德国</a></p>
				</li>
				
				<li>
					<h3><span>&gt;</span><a href="#" target="_blank">酒具</a></h3>
					<p><a href="#" target="_blank">酒柜</a><a href="#" target="_blank">酒器</a><a href="#" target="_blank">越海酒柜</a><a href="#" target="_blank">新朝</a></p>
				</li>
			</ul>
			
 
 
 
 
 
    
    
  <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <dl class="clearfix" >
   <div class="box1 cate" id="cate">
<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
		<h1 onclick="tab(<?php echo ($this->_foreach['no']['iteration'] - 1); ?>)"  
		
		
		<?php if (($this->_foreach['no']['iteration'] <= 1)): ?>
        style="border-top:none"
        <?php endif; ?> 
		 
		
		
		>
		
		 		
		<span class="f_l"><img src="themes/red_two/images/btn_fold.gif" style="padding-top:10px;padding-right:6px;cursor:pointer;"></span>
		<a href="<?php echo $this->_var['cat']['url']; ?>" class="  f_l"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>

		</h1>
		<ul style="display:none" >
		<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
		 <a class="over_2" href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>  
		 
<div class="clearfix">
<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
<a class="over_3" href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>   
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		<div style="clear:both"></div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
</div>
</dl>
</div>
<div class="blank"></div>









 
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = " block"
			obj_img.item(id).src = "themes/red_two/images/btn_unfold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/red_two/images/btn_fold.gif"
		}
}
</script>