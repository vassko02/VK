import { Component, OnInit } from '@angular/core';
import {ItalLap} from './italok.storage'

@Component({
  selector: 'app-ital-lap',
  templateUrl: './ital-lap.component.html',
  styleUrls: ['./ital-lap.component.scss']
})
export class ItalLapComponent implements OnInit {
  italok:any=[]
  constructor() { }

  ngOnInit(): void {
    this.italok=ItalLap;

  }

}
