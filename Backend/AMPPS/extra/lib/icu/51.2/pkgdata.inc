GENCCODE_ASSEMBLY_TYPE=-a gcc-darwin
SO=dylib
SOBJ=dylib
A=a
LIBPREFIX=lib
LIB_EXT_ORDER=.51.2.dylib
COMPILE=clang -DU_ATTRIBUTE_DEPRECATED= -I/Applications/AMPPS/extra/include    -O2 -Wall -std=c99 -pedantic -Wshadow -Wpointer-arith -Wmissing-prototypes -Wwrite-strings  -fno-common -c
LIBFLAGS=-I/Applications/AMPPS/extra/include  -dynamic
GENLIB=clang -dynamiclib -dynamic -O2 -Wall -std=c99 -pedantic -Wshadow -Wpointer-arith -Wmissing-prototypes -Wwrite-strings  -L/Applications/AMPPS/extra/lib -Wl,-rpath,/Applications/AMPPS/extra/lib 
LDICUDTFLAGS=
LD_SONAME=-Wl,-compatibility_version -Wl,51 -Wl,-current_version -Wl,51.2 -install_name /Applications/AMPPS/extra/lib/
RPATH_FLAGS=
BIR_LDFLAGS=
AR=ar
ARFLAGS=r -c
RANLIB=ranlib
INSTALL_CMD=/usr/bin/install -c
