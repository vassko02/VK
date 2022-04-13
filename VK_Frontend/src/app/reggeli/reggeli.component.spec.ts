import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ReggeliComponent } from './reggeli.component';

describe('ReggeliComponent', () => {
  let component: ReggeliComponent;
  let fixture: ComponentFixture<ReggeliComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ReggeliComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ReggeliComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
