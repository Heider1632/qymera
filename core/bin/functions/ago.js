function agotime(start, end, element){
	var date_start = new Date(start);
	var date_end = new Date(end);
	console.log(date_start + "-" + date_end);
  	moment(start, "YYYYMMDD");
 	moment(end, "YYYYMMDD");
  	console.log('restante ' + moment.duration(end - start).humanize());
}
