import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BorLapComponent } from './bor-lap.component';

describe('BorLapComponent', () => {
  let component: BorLapComponent;
  let fixture: ComponentFixture<BorLapComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BorLapComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(BorLapComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
