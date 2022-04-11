import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ElerhetosegeinkComponent } from './elerhetosegeink.component';

describe('ElerhetosegeinkComponent', () => {
  let component: ElerhetosegeinkComponent;
  let fixture: ComponentFixture<ElerhetosegeinkComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ElerhetosegeinkComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ElerhetosegeinkComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
