## DAC(digital to analog converter) performance testing tool

#### For in-depth explanation of this project, read "explanation.pdf"
The goal of this project is to provide user with a low-cost way to test DACs to prevent counterfeited electronics parts. This testing method can be used to test DAC <=16 bit. 

This project tests the dynamic performance of the test. If you are interested in static linearity test, check out my other project "DAClinearityTest"
#### Hardware requirement: 
 - External sound card with 24bit Delta-Sigma ADC (see image below)
 - For higher precision, use a sound card with a built-in analog pre-amp
 - PC/Mac/Linux computer

<img src="img/soundcard.png" width=200>
 
#### Software interface: 
<img src="img/interface.png" width=200>

#### Test with DFT
 - How it works?
   - 1.The DAC "is asked to" output a sine wave at 5000Hz using a direct signal synthesis algorithm.
   - 2.The output signal of the DAC is captured using the 24bit ADC. 
   - 3.DFT is performed on the captured signal, the magnitude information across the 0-20kHz frequency range is displayed on a scatter plot chart. 
   - 4.If the DAC is a genuine part,assuming high quality, most data points will concentrate aroung the 5000Hz freuqnecy band. 
 - Sample output from a testing session of a high quanlity DAC. 
<img src="img/DFTtest.png" width=500>

#### Test output flatness
 - How it works?
   - 1.The DAC "is asked to" output white noise using a direct signal synthesis algorithm.
   - 2.The output signal of the DAC is captured using the 24bit ADC. 
   - 3.DFT is performed on the captured signal, the magnitude information across the 0-20kHz frequency range is displayed on a scatter plot chart. 
   - 4.A quality DAC would show even amplitude across the entire frequency spectrum. 
 - Sample output: 
 <img src="img/flatnessTest.png" width=600>
 
 