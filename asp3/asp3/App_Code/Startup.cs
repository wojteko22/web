using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(asp3.Startup))]
namespace asp3
{
    public partial class Startup {
        public void Configuration(IAppBuilder app) {
            ConfigureAuth(app);
        }
    }
}
