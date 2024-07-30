import codecs 
def main():
    
    punc=open("doc1.txt",'r',encoding='utf-8')
    str1=read()    
    punc=open("doc2.txt",'r',encoding='utf-8')
    str2=read()
    punc=codecs.open("doc3.txt",'r',encoding='utf-8')
    str3=punc.read()
    punc=codecs.open("doc4.txt",'r',encoding='utf-8')
    str4=punc.read()

    
    print ("(ትክክለኛው ቅጂ)")
    
    print ("\n=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*\n")
    print ( "--- First file ---")
    print (str1)   
    
    print ("--- Second file ---")
    print (str2)   
    
    print ("--- Third file ---")
    print (str3)
    
    print ("--- Fourth file ----")
    print (str4)
    print ("=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*\n")
    print ("================================================================================\n")

    
    #Lexical ==============================================
    #def split_line(str):       
      # words = str.split() # split the text
       #for str in words: # for each word in the line:
        #     print(str)# prints each word on a line
   

    
  
    p=codecs.open("lexical.txt",'r',encoding='utf-8')
    pun=p.read()
    
    for pp in pun.split():
     str1 = str1.replace(pp,"")
     str2 = str2.replace(pp,"")
     str3 = str3.replace(pp,"")
     str4 = str4.replace(pp,"")
    print()
    print (" (መጀመሪያ ስርዓተ ነጥቦችን እናስወግዳለን።)")
    print ()
    print ("------ File one ------- *\n")
    print( str1)
    print ("------ File Two ------ \n")
    print (str2)
    print ("------ File Three -----\n")
    print (str3)
    print ("------ File Four ------\n")
    print (str4)
     
    print ("=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*\n")
    print ("================================================================================\n")   


    #Stopword ========================================


    print("(ከዚህ በመቀጠል አያያዠ ቃላት እናስወግዳለን።)")
    p1=open("stopword1.txt",'r',encoding='utf-8')
    stopword=p1.read()
    for p1 in stopword.split():
        str1=str1.replace(p1,"")
        str2=str2.replace(p1,"")
        str3=str3.replace(p1,"")
        str4=str4.replace(p1,"")
    print()
    print()
    print ("File one ----- \n")
    print (str1)
    print ("File Two ----- \n")
    print (str2)
    print ("File Three -----\n")
    print (str3)
    print ("File Four -----\n")
    print (str4)
    print()


    #Steeming=========================================

    
    suff=codecs.open("sufix1.txt",'r',encoding='utf-8')
    su=suff.read()
    
    pref=open("prefix1.txt",'r',encoding='utf-8')
    pre=pref.read()

    for s in su.split():
       str1= str1.replace(s,"")
         
    for s in su.split():
     
        str2= str2.replace(s,"")
          
    for s in su.split():
        
        str3= str3.replace(s,"")


    for s in su.split():
       
        str4= str4.replace(s,"")
          
                
    for p in pre.split():
       
        str1= str1.replace(p,"")
        
    for p in pre.split():
       
        str2= str2.replace(p,"")
         
    for p in pre.split():
     
        str3= str3.replace(p,"")

    for p in pre.split():
      
        str4= str4.replace(p,"")      
             
    print()
    print( " Steeming file(ተመሳሳይ ቃላትን ማስወገድ ) ")
    print ("   file 1        ")
    print( str1)
    print()
    print ("   file 2        ")
    print (str2)
    print()
    print ("    file 3       ")
    print (str3)
    print()
    print ("    file 4       ")
    print (str4)
    print()
    
    
main()    
