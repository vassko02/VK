import { ComponentFixture, TestBed } from '@angular/core/testing';

import { KaveinkComponent } from './kaveink.component';

describe('KaveinkComponent', () => {
  let component: KaveinkComponent;
  let fixture: ComponentFixture<KaveinkComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ KaveinkComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(KaveinkComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
