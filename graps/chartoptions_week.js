// JavaScript Document
var chartOptions={
	chart:{
		type: 'column'
	},
	title: {
		text: 'จำนวนการเข้าใช้ห้องปฏิบัติการ รายเดือน'
	},
	subtitle: {
		text: 'ที่มา: แสดงหัวข้อย่อย'
	},
	xAxis: {
		categories: [
		'จันทร์.',
		'อังคาร.',
		'พุธ.',
		'พฤหัสบดี.',
		'ศุกร์.',
		'เสาร์.',
		'อาทิตย์'
		],
		crosshair:true
	},
	yAxis:{
		min:0,
		title:{
			text: 'จำนวนชั่วโมง'
		}
	},
	plotOptions:{
		column:{
			pointPadding:0.2,
			borderWidth:0
		}
	}
}
		