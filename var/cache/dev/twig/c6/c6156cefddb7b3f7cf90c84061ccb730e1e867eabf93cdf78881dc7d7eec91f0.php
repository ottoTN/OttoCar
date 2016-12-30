<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b9747c1cc6840228b7f42995a5d3d15bb797bcea0d91972742021c495594f296 extends Twig_Template
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
        $__internal_8c6880c2de02725851656d067888ecf946998dc154273a5933c4b2cd6af7073a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6880c2de02725851656d067888ecf946998dc154273a5933c4b2cd6af7073a->enter($__internal_8c6880c2de02725851656d067888ecf946998dc154273a5933c4b2cd6af7073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9af1e4077dc97d02f5559e39d50054f3211487605ba8be1c547101b3551038ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af1e4077dc97d02f5559e39d50054f3211487605ba8be1c547101b3551038ae->enter($__internal_9af1e4077dc97d02f5559e39d50054f3211487605ba8be1c547101b3551038ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8c6880c2de02725851656d067888ecf946998dc154273a5933c4b2cd6af7073a->leave($__internal_8c6880c2de02725851656d067888ecf946998dc154273a5933c4b2cd6af7073a_prof);

        
        $__internal_9af1e4077dc97d02f5559e39d50054f3211487605ba8be1c547101b3551038ae->leave($__internal_9af1e4077dc97d02f5559e39d50054f3211487605ba8be1c547101b3551038ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
