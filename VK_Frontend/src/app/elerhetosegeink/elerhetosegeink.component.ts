import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-elerhetosegeink',
  templateUrl: './elerhetosegeink.component.html',
  styleUrls: ['./elerhetosegeink.component.scss']
})
export class ElerhetosegeinkComponent implements OnInit {
  options: any;

  constructor() { }

  ngOnInit(): void {
    this.options = {
      center: {lat: 36.890257, lng: 30.707417},
      zoom: 12
  };
  }

}
