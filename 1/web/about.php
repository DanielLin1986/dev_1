<?php
	include('header.html');
?>
      <div class="clear"> </div> 
      <!-- 
	<br>
		<div class="content">
			<div class="Category">
							<h4>&nbsp;Category</h4>
									<ul>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
									</ul><br>
									<h4>&nbsp;Services</h4>
									<ul>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
										<li><a href=""><img src="./images/arrowbullet.gif">&nbsp; Lorem ipsum dolor sit amet...</a></li>
									</ul><br>
									<h4>&nbsp;Specials</h4>
									<ul>
										<li><img src="./images/special1.png"></li>
										<li><h6>Lorem ipsum dolor sit amet...</h6><h6>Lorem ipsum ...</h6></li>
										<li><h5>$20.00</h5></li>
										<li><h3>$22.00</h3></li>
										<div class="clear"> </div>
									</ul>
						</div>-->
						<div class="main">
							<h4>欢迎您的光临！</h4>
							<div class="grid1">
								<img src="./images/items.jpg" title="items" width="400px" height="300px"/>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
								<div class="clear">  </div>
								</div>
							<div class="clear"> </div>
							<div class="list">
								<h2>产品销售比例</h2>
									<!--<ul>
										<li><img src="./images/special5.jpg"></li>
										<li><h6>Lorem ipsum dolor sit amet...</h6><h6>Lorem ipsum ...</h6></li>
										<li><h5>$20.00</h5></li>
										<li><h3>$22.00</h3></li>
									</ul>
									<ul>
										<li><img src="./images/special2.jpg"></li>
										<li><h6>Lorem ipsum dolor sit amet...</h6><h6>Lorem ipsum ...</h6></li>
										<li><h5>$20.00</h5></li>
										<li><h3>$22.00</h3></li>
									</ul>
									<ul>
										<li><img src="./images/special3.jpg"></li>
										<li><h6>Lorem ipsum dolor sit amet...</h6><h6>Lorem ipsum ...</h6></li>
										<li><h5>$20.00</h5></li>
										<li><h3>$22.00</h3></li>
									</ul>
									<ul>
										<li><img src="./images/special4.jpg"></li>
										<li><h6>Lorem ipsum dolor sit amet...</h6><h6>Lorem ipsum ...</h6></li>
										<li><h5>$20.00</h5></li>
										<li><h3>$22.00</h3></li>
									</ul>
									<div class="clear"> </div>	
								</div>
						</div>-->
						<p>下图显示了上季度客户所购买各类产品的比例：</p>
                <script src="../js/amcharts/amcharts.js" type="text/javascript"></script>
        		<script src="../js/amcharts/pie.js" type="text/javascript"></script>
                <script type="text/javascript">
					var chart;
					var legend;
		
					var chartData = [
						{
							"代购产品": "Karicare 羊奶粉",
							"value": 55
						},
						{
							"代购产品": "澳洲绵羊油",
							"value": 28
						},
						{
							"代购产品": "澳洲鱼油",
							"value": 6
						},
						{
							"代购产品": "澳洲亚麻籽油",
							"value": 4
						},
						{
							"代购产品": "其他保健品",
							"value": 7
						}
					];
		
					AmCharts.ready(function () {
						// PIE CHART
						chart = new AmCharts.AmPieChart();
						chart.dataProvider = chartData;
						chart.titleField = "代购产品";
						chart.valueField = "value";
						chart.outlineColor = "#FFFFFF";
						chart.outlineAlpha = 0.8;
						chart.outlineThickness = 2;
						chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
						// this makes the chart 3D
						chart.depth3D = 15;
						chart.angle = 30;
		
						// WRITE
						chart.write("chartdiv");
					});
				</script>        
                <div id="chartdiv" style="width:100%; height:400px;"></div>        
			<div class="clear"> </div>
		</div>
	</div>
	<div class="clear"> </div>
<?php
	include('footer.html');    
?>