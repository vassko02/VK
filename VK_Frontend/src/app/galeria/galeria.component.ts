import { Component, OnInit } from '@angular/core';
import { ImageModel } from '../Models/image.model';
import { Kepek } from './kepek.storage';
@Component({
  selector: 'app-galeria',
  templateUrl: './galeria.component.html',
  styleUrls: ['./galeria.component.css']
})
export class GaleriaComponent implements OnInit {

  model: any[] = [];
  belso: any[] = [];
  kulso: any[] = [];
  etelital: any[] = [];
	responsiveOptions;

  constructor() {
    this.responsiveOptions = [
      {
          breakpoint: '1024px',
          numVisible: 3,
          numScroll: 3
      },
      {
          breakpoint: '768px',
          numVisible: 2,
          numScroll: 2
      },
      {
          breakpoint: '560px',
          numVisible: 1,
          numScroll: 1
      }
  ];
  }

  ngOnInit(): void {
    this.model=Kepek;
    Kepek.forEach(kep => {
      if(kep.type=="belső"){
        this.belso.push(kep.url);
      }
      if(kep.type=="külső"){
        this.kulso.push(kep.url);
      }
      if(kep.type=="étel"){
        this.etelital.push(kep.url);
      }
    });
  }

}
