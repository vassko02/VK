import { Component, OnInit } from '@angular/core';
import {Borlap} from './borok.storage'
@Component({
  selector: 'app-bor-lap',
  templateUrl: './bor-lap.component.html',
  styleUrls: ['./bor-lap.component.scss']
})
export class BorLapComponent implements OnInit {
  borok:any=[]

  constructor() {
  }

  ngOnInit(): void {
    this.borok=Borlap;
  }

}
