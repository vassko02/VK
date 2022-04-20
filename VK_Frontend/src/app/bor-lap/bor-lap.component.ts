import { Component, OnInit } from '@angular/core';
import { ItemService } from '../Services/item.service';

@Component({
  selector: 'app-bor-lap',
  templateUrl: './bor-lap.component.html',
  styleUrls: ['./bor-lap.component.css']
})
export class BorLapComponent implements OnInit {
  borok:any=[]

  constructor(private service: ItemService) {
    this.service.getItemsByCategories(1).subscribe((data) => { this.borok = data; })
  }

  ngOnInit(): void {
  }

}
