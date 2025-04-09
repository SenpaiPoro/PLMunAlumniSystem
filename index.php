<?php include ('./include/header.php'); ?>


<div class="chart-container">
<!-- Add these to your HTML -->
 <div class="chart-box">
 <canvas id="allUsersChart"></canvas>
<canvas id="allunemployed"></canvas>
</div>
<div class="chart-box">
<canvas id="collegeUsersChart"></canvas>
<canvas id="all_workers"></canvas>
</div>
<style>
.chart-container {
  width: 100%;
  display:absolute;
  gap: 50px;
  margin-top: 20px;
}
.chart-box {
  width: 45%;
  display: inline-table;
  flex: 0;
  margin: 0 20px;
  padding: 5px;
  border: 2px solid #ddd;
  border-radius: 5px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/chart/chart.js"></script>
<?php include ('./include/footer.php'); ?>