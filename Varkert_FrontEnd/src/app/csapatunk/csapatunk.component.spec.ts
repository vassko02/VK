import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CsapatunkComponent } from './csapatunk.component';

describe('CsapatunkComponent', () => {
  let component: CsapatunkComponent;
  let fixture: ComponentFixture<CsapatunkComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CsapatunkComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CsapatunkComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
