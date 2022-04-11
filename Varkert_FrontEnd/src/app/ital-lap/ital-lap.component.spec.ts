import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ItalLapComponent } from './ital-lap.component';

describe('ItalLapComponent', () => {
  let component: ItalLapComponent;
  let fixture: ComponentFixture<ItalLapComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ItalLapComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ItalLapComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
