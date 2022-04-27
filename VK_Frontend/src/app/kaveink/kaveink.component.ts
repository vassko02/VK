import { Component, OnInit } from '@angular/core';
import { ItemService } from '../Services/item.service';

@Component({
  selector: 'app-kaveink',
  templateUrl: './kaveink.component.html',
  styleUrls: ['./kaveink.component.scss']
})
export class KaveinkComponent implements OnInit {
  kavek:any=[]

  constructor(private service:ItemService) {
    this.service.getItemsByCategories(1).subscribe((data)=>{this.kavek=data;})
  }
  ngOnInit(): void {
  }

}
