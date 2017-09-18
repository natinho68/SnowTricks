<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_64758c7d4a80afbfbf0c23ffecef34269059526dccbb4706918ae45e508582d7 extends Twig_Template
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
        $__internal_4047ee89b614c00ec2605cd677d479a9c8115da2642bfb78491878b37498bbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4047ee89b614c00ec2605cd677d479a9c8115da2642bfb78491878b37498bbf0->enter($__internal_4047ee89b614c00ec2605cd677d479a9c8115da2642bfb78491878b37498bbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_d59b55404185a993693d60fb917e519eb3b8f6c922810c2788ce55f93559348a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59b55404185a993693d60fb917e519eb3b8f6c922810c2788ce55f93559348a->enter($__internal_d59b55404185a993693d60fb917e519eb3b8f6c922810c2788ce55f93559348a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4047ee89b614c00ec2605cd677d479a9c8115da2642bfb78491878b37498bbf0->leave($__internal_4047ee89b614c00ec2605cd677d479a9c8115da2642bfb78491878b37498bbf0_prof);

        
        $__internal_d59b55404185a993693d60fb917e519eb3b8f6c922810c2788ce55f93559348a->leave($__internal_d59b55404185a993693d60fb917e519eb3b8f6c922810c2788ce55f93559348a_prof);

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
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
