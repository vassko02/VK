import { Component, OnInit } from '@angular/core';
import { ItemService } from '../Services/item.service';
@Component({
  selector: 'app-nyito-oldal',
  templateUrl: './nyito-oldal.component.html',
  styleUrls: ['./nyito-oldal.component.scss']
})
export class NyitoOldalComponent implements OnInit {
  kavek:any=[]

  constructor(private service:ItemService) {
    this.service.getItemsByCategories(1).subscribe((data)=>{this.kavek=data;})
  }

  ngOnInit(): void {
  }

}
