<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3fca92a7dabf2dbf04a1691aea89f6a1716f68cab41cfa1c8e5a52ea75c32c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_795903d365e258195637efaeb06ada1604c21754f238488608f6e316fec0ecef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795903d365e258195637efaeb06ada1604c21754f238488608f6e316fec0ecef->enter($__internal_795903d365e258195637efaeb06ada1604c21754f238488608f6e316fec0ecef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_5b2b8167984bcd3a11c18bfbf6a1f3110340ff88030038c0881bcb82e76c9aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2b8167984bcd3a11c18bfbf6a1f3110340ff88030038c0881bcb82e76c9aeb->enter($__internal_5b2b8167984bcd3a11c18bfbf6a1f3110340ff88030038c0881bcb82e76c9aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_795903d365e258195637efaeb06ada1604c21754f238488608f6e316fec0ecef->leave($__internal_795903d365e258195637efaeb06ada1604c21754f238488608f6e316fec0ecef_prof);

        
        $__internal_5b2b8167984bcd3a11c18bfbf6a1f3110340ff88030038c0881bcb82e76c9aeb->leave($__internal_5b2b8167984bcd3a11c18bfbf6a1f3110340ff88030038c0881bcb82e76c9aeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
