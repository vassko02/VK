import { Injectable } from '@angular/core';
import { ItemModel } from '../Models/item.model';
import {HttpClient} from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ItemService {

  constructor(private http:HttpClient) { }

  getItemsByCategories(id:number):Observable<ItemModel[]>{
    return this.http.get<ItemModel[]>("http://localhost/api/VK/varkert/public/api/itemsByCategories/"+id);
  }
}
