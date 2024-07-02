## Installation

```bash
npm i chart.js
npm i chartjs-plugin-datalabels
npm i apexcharts --save
npm i --save vue3-apexcharts
```

### after installation in app.js add

```bash
import VueApexCharts from "vue3-apexcharts";
```

```
    .use(VueApexCharts)
```

---

### publish vue components to path resources/js/Components/Charts

### publish char Classes to path app/Chart

```bash
php artisan vendor:publish --tag="Chart"
```

### Example In php

```
        $data['TestDoughnutChart']=(new TestDoughnutChart())->toVue();
        $data['TestPieChart']=(new TestPieChart())->toVue();
        $data['TestLineChart']=(new TestLineChart())->toVue();
        $data['TestPolarAreaChart']=(new TestPolarAreaChart())->toVue();
        $data['TestBarChart']=(new TestBarChart())->toVue();
        $data['TestApexAreaChart']=(new TestApexApexAreaChart())->toVue();
        $data['TestSemiDonutChartChart']=(new TestSemiDonutChartChart())->toVue();

```

### Example In vue

```
    <div class="grid grid-cols-4 gap-4">
        <ElChartCard :data="data" name="TestDoughnutChart"/>
        <ElChartCard :data="data" name="TestPieChart"/>
        <ElChartCard :data="data" name="TestSemiDonutChartChart"/>
        <ElChartCard :data="data" name="TestLineChart"/>
        <ElChartCard :data="data" name="TestPolarAreaChart"/>
        <ElChartCard :data="data" name="TestBarChart"/>
        <ElChartCard :data="data" name="TestApexAreaChart"/>
    </div>
```
