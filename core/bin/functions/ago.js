function agotime(start, end, event){
  moment(start, "YYYYMMDD");
  moment(end, "YYYYMMDD");
  console.log('restante ' + moment.duration(end - start).humanize());
}
