import { Component, OnInit } from '@angular/core';
import { ItemModel } from '../Models/item.model';
import { ItemService } from '../Services/item.service';
@Component({
  selector: 'app-nyito-oldal',
  templateUrl: './nyito-oldal.component.html',
  styleUrls: ['./nyito-oldal.component.css']
})
export class NyitoOldalComponent implements OnInit {
  kavek:any=[]

  constructor(private service:ItemService) {
    this.service.getItemsByCategories(1).subscribe((data)=>{this.kavek=data;})
  }

  ngOnInit(): void {
  }

}
